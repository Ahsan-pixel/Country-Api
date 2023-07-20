@extends('Layouts.app')

@section('content')

<h1>Edit Post</h1>
{!! Form::open(['action' => ['PostController@update',$Post->id]])!!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$Post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div><br><br>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$Post->body,['class'=>'form-control','placeholder'=>'Body'])}}
    </div><br><br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}<br><br>
{!! Form::close() !!}
@endsection
