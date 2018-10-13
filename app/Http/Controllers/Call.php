<?php

namespace App\Http\Controllers;
use App\Category;

class Call extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public static function category()
    {
        $cat = Category::get();
        return $cat;
    }
}
