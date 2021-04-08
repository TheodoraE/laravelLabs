<?php

namespace App\Http\Controllers;

use App\Models\HomeServicesButton;
use Illuminate\Http\Request;

class HomeServicesButtonController extends Controller
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
        return view('backoffice.home.services.createHomeServicesButton');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "button" => 'required',
            "link" => 'required'
        ]);

        $store = new HomeServicesButton;
        $store->button = $request->button;
        $store->link = $request->link;
        $store->save();
        return redirect('/homeServicesTitle');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeServicesButton  $homeServicesButton
     * @return \Illuminate\Http\Response
     */
    public function show(HomeServicesButton $homeServicesButton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeServicesButton  $homeServicesButton
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeServicesButton $homeServicesButton)
    {
        $edit = $homeServicesButton;
        return view('backoffice.home.services.editHomeServicesButton', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeServicesButton  $homeServicesButton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeServicesButton $homeServicesButton)
    {
        $validation = $request->validate([
            "button" => 'required',
            "link" => 'required'
        ]);

        $update = $homeServicesButton;
        $update->button = $request->button;
        $update->link = $request->link;
        $update->save();
        return redirect('/homeServicesTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeServicesButton  $homeServicesButton
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeServicesButton $homeServicesButton)
    {
        $destroy = $homeServicesButton;
        $destroy->delete();
        return redirect('/homeServicesTitle');
    }
}
