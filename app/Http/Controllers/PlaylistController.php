<?php

namespace App\Http\Controllers;

use App\Playlist;
use Illuminate\Http\Request;
use App\Movie;
use App\TvShow;

class PlaylistController extends Controller
{
    public function popular()
    {
        $data = Movie::orderBy('votes','desc')->paginate(12);
        return view('front.dashboardplaylistpop',['data'=>$data]);
    }

    public function recommended()
    {
        $data = Movie::orderBy('title','asc')->paginate(12);
        return view('front.dashboardplaylistrec',['data'=>$data]);
    }

    public function recent()
    {
        $data = Movie::orderBy('id','desc')->paginate(12);
        return view('front.dashboardplaylistreca',['data'=>$data]);
    }

    public function top10movies()
    {
        $data = Movie::orderBy('id','desc')->paginate(12);
        return view('front.dashboardplaylisttop10movies',['data'=>$data]);
    }
    public function top10shows()
    {
        $data = TvShow::orderBy('id','desc')->paginate(12);
        return view('front.dashboardplaylisttop10shows',['data'=>$data]);
    }
    public function index()
    {
        //
        return view('front.dashboardplaylists');
    }









    /**
 *                   ____   _______
     *        /\    |    |
     *       /  \   |----      |        FUNCTIONS
     *      /----\  |          |
     *     /      \ |       _______
     */





    }
