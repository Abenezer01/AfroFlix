<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    function  episode()
    {
        return $this->hasMany('App\Episode','tvShowId','id');
    }
}
