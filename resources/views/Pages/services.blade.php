{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','test-app')}}</title>
    </head>
    <body>
        <h1>Services</h1>
        <p>This is the services Page.</p>
    </body>
</html> --}}
{{-- <p>This is the services Page Enjoy!!.</p> --}}

@extends('Layouts.app')

@section('content')
<h1>{{$title}}</h1>
@if (count($services)>0)
    <ul>
            @foreach ( $services as $service)
            <li>
            {{$service}}
            </li>
        @endforeach
    </ul>
@endif
@endsection
