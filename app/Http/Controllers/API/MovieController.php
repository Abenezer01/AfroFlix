<?php

namespace App\Http\Controllers\API;

use App\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Searchable\Search;

class MovieController extends Controller
{

/**
 *                   ____   _______
     *        /\    |    |
     *       /  \   |----      |        FUNCTIONS
     *      /----\  |          |
     *     /      \ |       _______
     */

    public function ApiIndex(){
        return $data = Movie::orderBy('id','desc')->get();

    }

    public function ApiShow($id){
        return $data = Movie::findOrFail($id);
    }

    public function ApiPlayer($id)
    {
        return $data = Movie::findOrFail($id);
    }
    public function ApiNewarrival()
    {
        $data = Movie::orderBy('id','desc');
    }

}
