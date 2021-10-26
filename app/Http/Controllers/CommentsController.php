<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index($post_id)
    {
        // 댓글 리스트
        // latest()는 데이터베이스에서 가장 최근의 데이터 세트를 가져온다
        // 즉, 데이터를 시간순으로 정렬하기 위해 'created_at 열을 사용하여 가져온 데이터를 정렬
        $comments = Comment::where('post_id', $post_id)->latest()->get();
        return $comments;
    }
    public function store(Request $request, $post_id)
    {
        // 댓글 등록
        $request->validate(['comment' => 'required']);

        $comment = Comment::create([
            'comment' => $request->input('comment'),
            'user_id' => auth()->user()->id,
            'post_id' => $post_id
        ]);
        return $comment;
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
