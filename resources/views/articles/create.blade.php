@extends ('loyaut')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="conteiner">
            <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

            <form method="POST" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
<!--                        <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" id="title">

                        @if ($errors->has('title'))
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @endif
-->
                        <input
                        class="input @error('title') is-danger @enderror"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title') }}">

                        @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerp</label>

                    <div class="control">
                        <textarea
                        class="textarea @error('excerpt') is-danger @enderror"
                        type="text"
                        name="excerpt"
                        id="excerpt">
                            {{ old('excerpt') }}
                        </textarea>

                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea
                        class="textarea @error('body') is-danger @enderror"
                        type="text"
                        name="body"
                        id="body">
                            {{ old('body') }}
                        </textarea>

                        @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="control">
                    <button class="button is-text" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
