<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Auth;
use App\User;

class CommentsController extends Controller
{
   
    public function store(Post $post) //Route - Model Binding
    {
        $user = Auth::user();
        Comment::create([
            'post_id' => $post->id,
            'user_id' => $user->id,
            'body' => request('body')
        ]);

        return back();
    }
}

    