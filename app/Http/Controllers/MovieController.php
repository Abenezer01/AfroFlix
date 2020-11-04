<?php

namespace App\Http\Controllers;

use App\Movie;
use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Searchable\Search;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $simillar = Movie::orderBy('id','desc')->paginate(8);
        return view('fronta.watching',['movie' => Movie::findOrFail($id)],['simillar' => $simillar]);
    }
    public function detail($id){
        return view('fronta.modules.moviedetails',['movie' => Movie::findOrFail($id)]);
    }
    public function home()
    {
        $trending = Movie::orderBy('id','desc')->paginate(6);
        $popshow = TvShow::orderBy('id','desc')->paginate(6);
        $popmovie = Movie::orderBy('id','desc')->paginate(6);
        $recentshow = TvShow::orderBy('id','asc')->paginate(6);
        $recentmovies = Movie::orderBy('id','asc')->paginate(6);

        return view('fronta.index',['trending' => $trending],['popshow' => $popshow],['popmovie' => $popmovie],['recentshow' => $recentshow]);

    }

    public function searchMovie(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Movie::class, ['title'])
            ->perform($request->get('search'));

        return view('moviesearch', compact('searchResults'));
    }

    public function player($id)
    {
        return view('play',['movie' => Movie::findOrFail($id)]);
    }

    public function playervc($id)
    {
        $simillar = Movie::orderBy('id','desc')->paginate(4);
        return view('playvc',['movie' => Movie::findOrFail($id)],['simillar' => $simillar]);
    }

    public function newarrival()
    {
        $data = Movie::orderBy('id','desc')->get();
        return view('front.dashboardnewarrivals',['data'=>$data]);
    }

    public function drama()
    {
        $data = Movie::where('gener_id','=',1)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.dramaMovie',['data'=>$data]);
    }

    public function comedy()
    {
        $data = Movie::where('gener_id','=',2)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.comedyMovie',['data'=>$data]);
    }

    public function action()
    {
        $data = Movie::where('gener_id','=',3)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.actionMovie',['data'=>$data]);
    }

    public function romance()
    {
        $data = Movie::where('gener_id','=',4)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.romanceMovie',['data'=>$data]);
    }
    //horror
    public function horror()
    {
        $data = Movie::where('gener_id','=',5)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.horrorMovie',['data'=>$data]);
    }
    //fantasymov
    public function fantasy()
    {
        $data = Movie::where('gener_id','=',6)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.fantasyMovie',['data'=>$data]);
    }
    //scifi
    public function scifi()
    {
        $data = Movie::where('gener_id','=',7)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.scifiMovie',['data'=>$data]);
    }
    //thriller
    public function thriller()
    {
        $data = Movie::where('gener_id','=',8)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.thrillerMovie',['data'=>$data]);
    }
    //western
    public function western()
    {
        $data = Movie::where('gener_id','=',9)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.westernMovie',['data'=>$data]);
    }
    // adv
    public function adv()
    {
        $data = Movie::where('gener_id','=',10)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.advMovie',['data'=>$data]);
    }
    // anim
    public function anim()
    {
        $data = Movie::where('gener_id','=',11)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.animMovie',['data'=>$data]);
    }
    public function doc()
    {
        $data = Movie::where('gener_id','=',12)->orderBy('id','desc')->paginate(12);
        return view('fronta.gener.docMovie',['data'=>$data]);
    }
    public function index()
    {
        //
        // $gener= Gener::all();
        $data = Movie::orderBy('id','desc')->paginate(24);
        return view('fronta.categories',['data'=>$data]);
    }



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
