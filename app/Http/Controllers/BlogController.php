<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index() 
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        dd("blog create");
    }
}
