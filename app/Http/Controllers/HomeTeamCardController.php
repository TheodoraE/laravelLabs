<?php

namespace App\Http\Controllers;

use App\Models\HomeTeamCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeTeamCardController extends Controller
{
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
        return view('backoffice.home.team.createHomeTeamCard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validation = $request->validate([
        //     "url" => 'required',
        //     "name" => 'required',
        //     "function" => 'required'
        // ]);

        // $store = new HomeTeamCard;
        // Storage::put('public/img', $request->url);
        // $store->url = $request->file('url')->hashName();
        // $store->name = $request->name;
        // $store->function = $request->function;
        // $store->save();
        // return redirect('/homeTeamCard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeTeamCard  $homeTeamCard
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTeamCard $homeTeamCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTeamCard  $homeTeamCard
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeTeamCard $homeTeamCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTeamCard  $homeTeamCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeTeamCard $homeTeamCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTeamCard  $homeTeamCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeTeamCard $homeTeamCard)
    {
        //
    }
}
