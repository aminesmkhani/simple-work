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
    public function show(Article $article)
    {
        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }


    public function update(Article $article)
    {
       $article->update($this->validateArticle());

       return redirect($article->path());
    }

    protected function validateArticle(){

        return request()->validate([
           'title' => 'required',
           'excerpt' => 'required',
           'body' => 'required',
        ]);
    }
}
