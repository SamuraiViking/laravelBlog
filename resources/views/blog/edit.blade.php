@extends('layout')

@section('content')

    <div>

        <form method="POST" action="/blogs/{{ $blog->id }}">
            @method("PATCH")
            @csrf

            <div class="field">
            
                <label for="title">
                
                    <h1>Title</h1>
                
                </label>

                <div>
                
                    <input name="title" type="text" value="{{ $blog->title }}">
                
                </div>
            
            </div>

            <div class="field">
            
                <label for="text">
                
                    <h1>Text</h1>
                
                </label>

                <div>

                    <textarea name="text"> {{ $blog->text }} </textarea>
                
                </div>
            
            </div>

            <button type="submit">Submit</button>
    
        </form>

        <form method="POST" action="/blogs/{{ $blog->id }}">

            @method('DELETE')
            @csrf

            <button type="submit">Delete</button>

        </form>
    
    </div>

@stop