@extends('layout')

@section('content')

    <h1> Blogs </h1>

    @foreach($blogs as $blog)

        <h1> {{ $blog->title }} </h1>

    @endforeach

@endsection