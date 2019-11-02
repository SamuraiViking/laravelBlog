@extends('layout')

@section('content')

    <h1> Blogs </h1>

    <ul>

        @foreach($blogs as $blog)
            
            <a href="/blogs/{{ $blog->id }}">

                <li>{{ $blog->title }}</li>

            </a>

        @endforeach
    
    </ul>

    <div>

        <a href="blogs/create">Create New Blog</a>

    </div>

@endsection