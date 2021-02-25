<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(3);
        return view('articles.index',compact('articles'));
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
        return view('articles.create');
    }
}
