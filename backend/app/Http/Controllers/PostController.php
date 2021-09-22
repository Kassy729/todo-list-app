<?php

namespace App\Http\Controllers;

use App\Models\DevPost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $todo = $request->todo;

        $post = new Post();
        $post->user_id = 11;
        $post->todo = $todo;
        $post->save();
    }

    public function devIndex()
    {
        return 1;
        $posts = DevPost::all();
        return $posts;
    }

    public function show($id)
    {
        $post = Post::find($id);
        $post = Post::orderBy('created_at', 'desc')->get();
        return $post;
    }

    public function devStore(Request $request)
    {
        $title = $request->title;
        $content = $request->content;

        $post = new DevPost();
        $post->user_id = 11;
        $post->title = $title;
        $post->content = $content;

        $post->save();
    }
}
