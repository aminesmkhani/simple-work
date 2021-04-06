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
                        @forelse($articles as $article)
                            <li class="first">
                                <h3><a href="{{$article->path()}}">{{$article->title}}</a></h3>
                                <p><a href="#">{{$article->excerpt}}</a></p>
                            </li>
                        @empty
                            <p>No Relevent Articles yet.</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
@endsection
