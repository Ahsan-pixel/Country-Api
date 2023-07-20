<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  Request  $request
     * @param  int  $id
    * @use validatesRequests;
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $Posts= Post::all();
        // $Posts= Post::orderby('title','asc')->get();
        $Posts= DB::select('SELECT * FROM Posts');
        return view('Posts.index')->with('Posts',$Posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $Title = $request->input('title');
        // $request->validate('Title');
        // $request->validate('Body');
        $request->validate(['title'=>'required','body'=>'required']);

        $Post=new Post;
        $Post->title=$request->input('title');
        $Post->body=$request->input('body');
        $Post->save();
        return redirect('/Posts')->with('success','Post created_at');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Post= Post::find($id);
        // return view('Posts.show',['id'=>$id]);
        return view('Posts.show')->with('Post',$Post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $Post = Post::find($id);
        return view('Posts.edit')->with('Post',$Post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(['title'=>'required','body'=>'required']);

        $Post=Post::Find($id);
        $Post->title=$request->input('title');
        $Post->body=$request->input('body');
        $Post->save();
        return redirect('/Posts')->with('success','Post Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Post=Post::find($id);
        $Post->delete();
        return redirect('/Posts')->with('success','Post removed');
    }
}
