<?php

namespace App\Http\Controllers;

use App\Models\HomeTeamCard;
use App\Models\HomeTeamTitle;
use Illuminate\Http\Request;

class HomeTeamTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeTeamTitle = HomeTeamTitle::all();
        $homeTeamCards = HomeTeamCard::all();

        return view('backoffice.home.team.homeTeam', compact('homeTeamTitle', 'homeTeamCards'));
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
     * @param  \App\Models\HomeTeamTitle  $homeTeamTitle
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTeamTitle $homeTeamTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTeamTitle  $homeTeamTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeTeamTitle $homeTeamTitle)
    {
        $edit = $homeTeamTitle;
        return view('backoffice.home.team.editHomeTeamTitle', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTeamTitle  $homeTeamTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeTeamTitle $homeTeamTitle)
    {
        $validation = $request->validate([
            "title" => 'required'
        ]);

        $update = $homeTeamTitle;
        $update->title = $request->title;
        $update->save();
        return redirect('/homeTeamTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTeamTitle  $homeTeamTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeTeamTitle $homeTeamTitle)
    {
        //
    }
}
