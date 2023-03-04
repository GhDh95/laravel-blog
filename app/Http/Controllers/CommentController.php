<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $attributes = request()->validate([
            'body' => ['required']
        ]);

        /*  $comment = new Comment;
        $comment->body = $attributes['body'];
        $comment->post_id = $post->id;
        $comment->user_id = $post->author->id;

        $comment->save(); */

        $post->comments()->create([
            'body' => $attributes['body'],
            'user_id' => auth()->id()
        ]);

        return back()->with('success', 'Your Comment has been added');
    }
}
