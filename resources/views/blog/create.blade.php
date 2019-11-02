@extends('layout')

@section('content')

    <div>

        <form method="POST" action="/blogs">
            @csrf

            <div class="field">
            
                <label for="title">
                
                    <h1>Title</h1>
                
                </label>

                <div>
                
                    <input name="title" type="text" placeholder = "title" value="">
                
                </div>
            
            </div>

            <div class="field">
            
                <label for="text">
                
                    <h1>Text</h1>
                
                </label>

                <div>

                    <textarea name="text" placeholder="text"></textarea>
                
                </div>
            
            </div>

            <button type="submit">Submit</button>
    
        </form>

        <a href="/blogs">back</a>
    
    </div>

@stop