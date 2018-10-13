<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $cat = Category::orderBy('id','desc')->get();
        return view('listcat',compact('cat'));
    }

    public function addget()
    {
        return view('addcat');
    }

    public function viewcat($id)
    {
        $cat = Post::find($id);
        return view('edit.editcat', compact('cat'));
    }

    public function updatecat(Request $request, $id)
    {
        $cat = Category::find($id);
        $cat->save();

        return back()->with('Đã sửa bài viết');
    }


    public function addpost(Request $request)
    {
        $cat = new Category();
        $cat->category_name = $request->category_name;
        $cat->category_slug = $request->category_slug;
        $cat->save();

        return redirect('admin/category')->with('msg', 'Đã thêm danh mục');
    }


    public function delcat($id)
    {
        Category::delete($id);
        return back()->with('msg', 'Xóa bài viết');
    }


}
