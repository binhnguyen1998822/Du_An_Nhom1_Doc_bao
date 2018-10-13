<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
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
    public function list()
    {
        $post =Post::orderBy('id','desc')->get();
        return view('listpost',compact('post'));
    }

    public function addget()
    {

        return view('addpost');
    }

    public function viewpost($id)
    {
        $post = Post::find($id);
        return view('edit.editpost', compact('post'));
    }

    public function updatepost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->author_ID = Auth::id();
        $post->category_ID = $request->category_ID;
        $post->author_ID = $request->author_ID;
        $post->post_title = $request->post_title;
        $post->post_content = $request->post_content;
        $post->post_image = $request->post_image;
        $post->post_slug = $request->post_slug;
        $post->post_status = $request->post_status;
        $post->save();

        return back()->with('Đã sửa bài viết');
    }


    public function addpost(Request $request)
    {
        $post = new Post();
        $post->author_ID = Auth::id();
        $post->category_ID = $request->category_ID;
        $post->post_title = $request->post_title;
        $post->post_content = $request->post_content;
        $post->post_image = $request->post_image;
        $post->post_slug = $request->post_slug;
        $post->save();

        return redirect('listpost')->with('msg', 'Đã thêm bài viết');
    }


    public function delpost($id)
    {
        Post::delete($id);
        return back()->with('msg', 'Xóa bài viết');
    }


}
