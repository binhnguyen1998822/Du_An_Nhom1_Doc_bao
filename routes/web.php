<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', function () {
    return redirect('/');
});

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::namespace('Admin')->group(function () {
        //home
        Route::get('home', 'HomeController@index');
        Route::get('/', 'HomeController@index');
        //post
        Route::get('addpost', 'PostController@addget');
        Route::post('addpost', 'PostController@addpost');
        Route::get('listpost', 'PostController@list');
        //cat
        Route::get('category', 'CategoryController@list');
        Route::get('addcat', 'CategoryController@addget');
        Route::post('addcat', 'CategoryController@addpost');

         });
});

Route::namespace('View')->group(function () {
    //home
    Route::get('/', 'HomeController@index');
    Route::get('info', 'HomeController@info');
    Route::get('blog/{slug}', 'HomeController@view');
    Route::post('comment', 'HomeController@comment');
});
Route::prefix('api')->group(function () {
    Route::namespace('View')->group(function () {
        Route::get('json2', 'JsonController@index');
        Route::get('json', 'JsonController@json');
    });
});