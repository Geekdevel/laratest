<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        // Render a list of resource
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    /*public function show($id)
    //public function show(Article $article)
    {
        //Show a single resource
        //$article = Article::find($id);
        $article = Article::findOrFail($id);

        return view('articles.show', ['article' => $article]);
    }*/
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        //Show a view to create a new resours
        return view('articles.create');
    }

    /*public function store()
    {
        //Save create resourse in base
        //die('hello');
        //dump(request()->all());

        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = new Article;

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }*/

    public function store()
    {
        /*$validateAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);*/

        //return $validateAttributes;

        /*Article::create([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        ]);*/

        //Article::create($validateAttributes);

        Article::create(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/articles');
    }

    public function edit($id)
    {
        //Show a view to edit resourse
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    /*public function update($id)
    {
        //Save edit resourse in base
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/'.$article->id);
    }*/
    public function update(Article $article)
    {
        /*request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);*/
        /*$validateAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article->update($validateAttributes);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();*/
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/articles/'.$article->id);
    }

    public function destroy()
    {
        //Delete resourse
    }
}
