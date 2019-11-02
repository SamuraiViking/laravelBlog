@extends('layout')

@section('content')

    <div>
    
        <h1> {{ $blog->title }} </h1>

        <p> {{ $blog->text }}</p>
    
    </div>

    <div>

        <a href="/blogs/{{ $blog->id }}/edit">edit</a>

    </div>

    <div>

        <a href="/blogs">back</a>

    </div>

@stop