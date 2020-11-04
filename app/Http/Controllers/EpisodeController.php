<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function playert($id)
    {
        $episodes = Episode::find($id);
        return view('playt',['episode' => $episodes]);
    }

    public function playervc($id)
    {
        return view('playvc',['movie' => Episode::findOrFail($id)]);
    }





       /**
 *                   ____   _______
     *        /\    |    |
     *       /  \   |----      |        FUNCTIONS
     *      /----\  |          |
     *     /      \ |       _______
     */
    public function ApiPlayert($id)
    {
        return  $episodes = Episode::find($id);
    }
}
