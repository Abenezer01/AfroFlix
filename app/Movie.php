<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Movie extends Model implements Searchable
{
    protected $fillable = ['title', 'poster'];

    public function getSearchResult(): SearchResult
    {
        $url = route('movie', $this->id);
        //$poster = $thi.poster;

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url,
            //$poster = $this->poster,
        );
    }


}
