<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
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
        $this->sentNoti($post);

        return redirect('admin/listpost')->with('msg', 'Đã thêm bài viết');
    }


    public function delpost($id)
    {
        Post::delete($id);
        return back()->with('msg', 'Xóa bài viết');
    }

    public function sentNoti($post) {

        $ch = curl_init("https://fcm.googleapis.com/fcm/send");

        $fields = array(
            "to" => "/topics/NTB",
            'data' => $post
        );
        $headers = array();

        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key= AAAAKlbvVf4:APA91bHtKzyO-5OX-pKdtyjpXVjenIt10LQaSv2gfuBh6aK5FAcIsYy8mCcXEQ1sBAh0pOQN-0EGJ10SVk9J1VmUM1e3YIf9UKylwwjC8GScQekY5Qr_eq5QQk3iTNPi1Q2NkZhNouOS';

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function testNoty() {

        $ch = curl_init("https://fcm.googleapis.com/fcm/send");

        $fields = array(
            "to" => "/topics/NTB",
            'data' => array(
                "post_title" => "Test Thông báo"
            )
        );
        $headers = array();

        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key= AAAAKlbvVf4:APA91bHtKzyO-5OX-pKdtyjpXVjenIt10LQaSv2gfuBh6aK5FAcIsYy8mCcXEQ1sBAh0pOQN-0EGJ10SVk9J1VmUM1e3YIf9UKylwwjC8GScQekY5Qr_eq5QQk3iTNPi1Q2NkZhNouOS';

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }


}
