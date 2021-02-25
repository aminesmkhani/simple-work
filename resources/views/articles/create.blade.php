@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            <form action="">
                <div>
                    <label for="label" for="title">Title</label>

                    <div class="control">
                        <input type="text" class="text" name="title" id="title">
                    </div>
                </div>

                <div>
                    <label for="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                    </div>
                </div>


                <div>
                    <label for="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
