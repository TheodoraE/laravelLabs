<?php

namespace App\Http\Controllers;

use App\Models\HomeCarousel;
use Illuminate\Http\Request;

class HomeCarouselController extends Controller
{
    public function __construct(){
        $this->middleware(["auth", "isWebMaster"]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCarousel $homeCarousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeCarousel $homeCarousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeCarousel $homeCarousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeCarousel $homeCarousel)
    {
        //
    }
}
