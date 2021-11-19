<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MypageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mypage()
    {
        $posts = Post::where('user_id', auth()->id())->latest()->paginate(10);
        return view('mypage', ['posts' => $posts]);
    }
}
