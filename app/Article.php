<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*public function getRouteKeyName()
    {
        return 'slug'; //Article::where('slug', $article)->first();
    }*/
    //protected $fillable = ['title', 'excerpt', 'body'];//Article::create(request()->all());

    protected $guarded = [];

    public function path()
    {
        return route('articles.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projects()
    {
        //
    }
}
