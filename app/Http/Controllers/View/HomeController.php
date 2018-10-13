<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Post;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Post::get();
        return view('fontend.home',compact('blog'));
    }
}
