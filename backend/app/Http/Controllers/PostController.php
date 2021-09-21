<?php

namespace App\Http\Controllers;

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
}
