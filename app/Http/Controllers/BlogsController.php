<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function index()
    {

        $blogs = Blog::all();

        return view('blog.index', compact('blogs'));

    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => ['required'],
            'text' => ['required', 'min:4']
        ]);

        Blog::create($attributes);

        return redirect('/blogs');
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Blog $blog)
    {

        $blog->update(request(['title', 'text']));

        return redirect("blogs/{$blog->id}");

    }
    public function create()
    {

        return view('blog.create');

    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/blogs');

    }
}
