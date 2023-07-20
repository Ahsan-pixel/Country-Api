@extends('Layouts.app')

@section('content')
<a href="/Posts" class="btn btn-default">Go Back</a>
    <h1>{{$Post->title}}</h1>
    <p>{{$Post->body}}</p>
    <hr>{{$Post->title}}
    <small>Written on {{$Post->created_at}}</small>
    <hr>
    <a href="/Posts/{{$Post->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action'=>['PostController@destroy',$Post->id],'method'=>'POST','class'=>'pull-right']) !!}
    <br>
    {{ Form::hidden('_method','DELETE')}}
    {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}<br><br>
    {!! Form::close() !!}
@endsection
