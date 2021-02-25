<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
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

    public function store()
    {
        // persist the new article
        $article = new Article();
        $article->title = \request('title');
        $article->excerpt = \request('excerpt');
        $article->body = \request('body');

        $article->save();

        return redirect('/articles');
    }
}
