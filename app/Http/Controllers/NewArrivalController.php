<?php

namespace App\Http\Controllers;

use App\NewArrival;
use Illuminate\Http\Request;

class NewArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.dashboardnewarrivals');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function show(NewArrival $newArrival)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function edit(NewArrival $newArrival)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewArrival $newArrival)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewArrival $newArrival)
    {
        //
    }
}
