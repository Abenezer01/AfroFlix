<?php

namespace App\Http\Controllers;

use App\Comingsoon;
use Illuminate\Http\Request;

class ComingsoonController extends Controller
{

    public function index()
    {
        $data = Comingsoon::orderBy('id','desc')->get();
        return view('front.dashboardcomingsoon',['data'=>$data]);
    }

}
