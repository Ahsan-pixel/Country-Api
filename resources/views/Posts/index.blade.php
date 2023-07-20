@extends('Layouts.app')

@section('content')
<h1>Posts</h1>
    @if (is_Countable($Posts) && count($Posts) > 1)
        <div class="card">
            <ul class="List-group list-group-flush">
                @foreach ($Posts as $Post )
                        <li class="list-group-item">
                            <h3><a href="/Posts/{{$Post->id}}">{{$Post->title}}</a></h3>
                            <small>Written on {{$Post->created_at}}</small>
                        </li>
                @endforeach
            </ul>
        </div>
    @else

    @endif
@endsection



{{-- <a href=" url('Post', $Posts)">Post one</a><br><br> --}}
