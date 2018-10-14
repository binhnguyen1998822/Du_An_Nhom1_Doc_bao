<?php

namespace App\Http\Controllers\View;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Post::orderBy('id', 'desc')->get();
        return view('fontend.home', compact('blog'));
    }

    public function view($slug)
    {
        $blog = Post::where('post_slug', $slug)->first();
        if ($blog == null) {
            return back();
        } else {
            $cmt = Comment::where('post_ID', $blog->id)->get();
            $cmtcont = Comment::where('post_ID', $blog->id)->count();
            return view('fontend.details', compact('blog', 'cmt', 'cmtcont'));
        }
    }


    public function comment(Request $request)
    {
        $cmt = new Comment();
        $cmt->post_ID = $request->post_ID;
        $cmt->comment_author_IP = $request->ip();
        $cmt->comment_content = $request->comment_content;
        $cmt->user_id = Auth::id();
        $cmt->save();

        return back();
    }
    public function info()
    {
        return view('fontend.info');
    }


}
