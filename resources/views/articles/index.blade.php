@extends('layout')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Articles</h2>
                </div>
                <div id="sidebar">
                    <ul class="style1">
                        @foreach ($articles as $article)
                            <li class="first">
                                <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                                <p><a href="#">{{$article->excerpt}}</a></p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
@endsection
