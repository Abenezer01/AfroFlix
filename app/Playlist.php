<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $tabel="playlists";
    //
    function movie()
    {
        return $this->hasMany('App\Movie','id','movie_id');
    }

}
