<?php

namespace App\Http\Controllers\API;

use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Searchable\Search;

class TvShowController extends Controller
{
    /**
 *                   ____   _______
     *        /\    |    |
     *       /  \   |----      |        FUNCTIONS
     *      /----\  |          |
     *     /      \ |       _______
     */

    public function ApiIndex(){
        return $tvshow = TvShow::orderBy('id','desc')->get();

    }
     public function ApiShow($id)
    {
       return $episodes = TvShow::find($id)->episode;

    }

}
