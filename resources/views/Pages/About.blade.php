{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','test-app')}}</title>
    </head>
    <body>
        <h1>About</h1>
        <p>This is About Laravel.</p>
    </body>
</html> --}}

@extends('Layouts.app')

@section('content')
<h1>{{$title}}</h1>
<p>This is About Laravel Enjoy!!.</p>
@endsection
