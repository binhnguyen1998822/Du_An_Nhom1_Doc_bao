<?php

namespace App\Http\Controllers\View;

use App\Category;
use App\Http\Controllers\Controller;

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
        return $cat;
    }


}
