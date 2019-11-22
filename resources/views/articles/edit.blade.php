@extends ('loyaut')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="conteiner">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>

            <!--<form method="PUT" action="/articles/{{ $article->id }}"> - если браузер вдруг не понимает PUT см/ ниже-->
                <form method="POST" action="/articles/{{ $article->id }}">
                @csrf <!-- CSRF Tokin -->

                @method('PUT') <!-- Lara поймет что это надо пускать по роуту через PUT -->

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerp</label>

                    <div class="control">
                        <textarea class="textarea" type="text" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" type="text" name="body" id="body">{{ $article->body }}</textarea>
                    </div>
                </div>

                <div class="control">
                    <button class="button is-text" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection