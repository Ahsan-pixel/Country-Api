<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $title="Welcome to Programming Language. Enjoy !!";
        return view('Pages.index')->with('title',$title);
    }
    public function About()
    {
        // return view('Pages.About');
        $title="About us !!";
        return view('Pages.about')->with('title',$title);
    }
    public function services()
    {
        // return view('Pages.services');
        $data=array(
            'title'=>'services',
            'services'=>['Web Design','Programming','SEO']
        );
        // $title="Services for Laravel Language";
        return view('Pages.services')->with($data);
    }
}
