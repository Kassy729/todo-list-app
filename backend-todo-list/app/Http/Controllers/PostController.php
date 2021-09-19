<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        $content = $request->content;
        $post = new Post();
        $post->content = $content;
        $post->save();
    }
}
