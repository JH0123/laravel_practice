<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $post_id)
    {
        Comment::create([
            'comment' => $request->comment,
            'user_id' => auth()->user()->id,
            'post_id' => $post_id
        ]);
        return redirect()->back();
    }
}
