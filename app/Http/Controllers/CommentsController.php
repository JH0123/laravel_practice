<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index($postId)
    {
        // 댓글 리스트
        // latest()는 데이터베이스에서 가장 최근의 데이터 세트를 가져온다
        // 즉, 데이터를 시간순으로 정렬하기 위해 'created_at 열을 사용하여 가져온 데이터를 정렬
        $comments = Comment::with('user')->where('post_id', $postId)->latest()->paginate(2);
        return $comments;
    }

    public function store(Request $request, $postId)
    {
        // 댓글 등록
        $request->validate(['comment' => 'required']);

        $comment = Comment::create([
            'comment' => $request->input('comment'),
            'user_id' => auth()->user()->id,
            'post_id' => $postId
        ]);
        return $comment;
    }
    public function update(Request $request, $commentId)
    {
        // 댓글 수정
        $request->validate(['comment' => 'required']);  //유효성 검사 규칙
        $comment = Comment::find($commentId);
        $comment->update([
            'comment' => $request->input('comment')
        ]);
        return $comment;
    }
    public function destroy($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->delete(); //아이디를 이미 찾았기 때문에 줄 필요는 없다
        return $comment;
    }
}
