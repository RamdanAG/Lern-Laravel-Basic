<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all() // menggunakan \App\Post untuk memanggil model Post
        ]); // memanggil halaman posts
    }

    public function show($slug)
    {
        return view('post',[
            "title" => "single post",
            "post" => Post::find($slug)
        ]);
    }
}
