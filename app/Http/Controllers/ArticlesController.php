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

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        //Show a view to create a new resours
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit($id)
    {
        //Show a view to edit resourse
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect('/articles/'.$article->id);
    }

    public function destroy()
    {
        //Delete resourse
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
