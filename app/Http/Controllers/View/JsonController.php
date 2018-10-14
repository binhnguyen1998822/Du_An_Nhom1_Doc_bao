<?php

namespace App\Http\Controllers\View;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;

class JsonController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::with('post')->get();
        return response()->json(['data' => $cat]);
    }

 public function json()
    {
        $post = Post::get();
        return response()->json(['data' => $post]);
    }


}
