<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mypage()
    {
        // $posts = new User();
        // $posts = Auth::find()->user($id);
        $posts = Post::where('user_id', auth()->id())->get();
        return view('mypage', ['posts' => $posts]);
    }
}
