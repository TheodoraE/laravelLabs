<?php

namespace App\Http\Controllers;

use App\Models\HomeServicesButton;
use App\Models\HomeServicesTitle;
use Illuminate\Http\Request;

class HomeServicesTitleController extends Controller
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
        $homeServicesTitle = HomeServicesTitle::all();
        $homeServicesButton = HomeServicesButton::all();
    
        return view('backoffice.home.services.homeServices', compact('homeServicesTitle', 'homeServicesButton'));
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
     * @param  \App\Models\HomeServicesTitle  $homeServicesTitle
     * @return \Illuminate\Http\Response
     */
    public function show(HomeServicesTitle $homeServicesTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeServicesTitle  $homeServicesTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeServicesTitle $homeServicesTitle)
    {
        $edit = $homeServicesTitle;
        return view('backoffice.home.services.editHomeServicesTitle', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeServicesTitle  $homeServicesTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeServicesTitle $homeServicesTitle)
    {
        $validation = $request->validate([
            "title" => 'required'
        ]);

        $update = $homeServicesTitle;
        $update->title = $request->title;
        $update->save();
        return redirect('/homeServicesTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeServicesTitle  $homeServicesTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeServicesTitle $homeServicesTitle)
    {
        //
    }
}
