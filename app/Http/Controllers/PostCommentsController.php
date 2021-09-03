<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $post->id,
            'body' => request('body')
        ]);

        return back();
    }
}
