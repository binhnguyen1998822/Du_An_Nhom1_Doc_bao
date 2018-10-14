<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\Comment;
use App\Post;
use App\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countpost = Post::count();
        $countcat = Category::count();
        $countcmt = Comment::count();
        $countview = Task::where('view',1)->count();

        return view('home', compact('countpost', 'countcat', 'countcmt','countview'));
    }
}
