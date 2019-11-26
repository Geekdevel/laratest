<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /*public function watchable()
    {
        return $this->morphTo();
    }*/

    public function perent()
    {
        return $this->morphTo('watchable');
    }
}
