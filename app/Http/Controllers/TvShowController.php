<?php

namespace App\Http\Controllers;

use App\TvShow;
use Illuminate\Http\Request;

class TvShowController extends Controller
{

    public function show($id)
    {
        $episodes = TvShow::find($id)->episode;
        $tvshow = TvShow::findOrFail($id);
        return view('front.tvshowprofile',['episodes' =>$episodes],['tvshow'=>$tvshow]);
    }

    public function index()
    {
        $tvshow = TvShow::orderBy('id','desc')->get();
        return view('front.dashboardhome',['tvshow'=>$tvshow]);
    }


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
