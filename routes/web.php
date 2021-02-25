<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('posts/{post}','PostsController@show');

Route::get('/',function (){
    return view('welcome');
});

Route::get('/about',function (){
    $articles  = \App\Models\Article::latest()->get();
    return view('about',compact('articles'));
});
Route::get('/articles/create','ArticleController@create');
Route::post('/articles','ArticleController@store');
Route::get('/articles/{article}','ArticleController@show');
Route::get('/articles','ArticleController@index');
