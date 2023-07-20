{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Test-app')}}</title>
    </head>
    {{-- <body>
        <h1>Welcome to Laravel for Beginners.</h1>
        <p>This is the Laravel Tutorial.</p>
    </body>
</html>--}}

@extends('Layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>This is the Laravel Tutorial.</p>
@endsection
