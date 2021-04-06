<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        if (request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }else{
            $articles = Article::latest()->get();
        }
        return view('articles.index',compact('articles'));
    }
    public function show(Article $article)
    {
        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
        return view('articles.create',['tags' => Tag::all()]);
    }

    public function store()
    {
        $this->validateArticle();

        $articles = new Article(request(['title','excerpt','body']));
        $articles->user_id = 1;// auth()->id()
        $articles->save();

        $articles->tags()->attach(request('tags'));
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
            'tags' => 'exists:tags,id'
        ]);
    }
}
