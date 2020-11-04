<?php

namespace App\Http\Controllers\API;

use App\Episode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EpisodeController extends Controller
{   /**
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
