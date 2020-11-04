<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gener extends Model
{
    //
    protected $guarded=[];

    public function movies()
    {

        return $this->hasMany(Movie::class);
    }
}
