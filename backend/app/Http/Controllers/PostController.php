<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {

        $content = $request->content;
        $post = new Post();
        $post->content = $content;
        $post->user_id = "1";
        $post->save();
        return $request;
    }

    public function index()
    {
        $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return $posts;
    }
}
