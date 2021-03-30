<?php

namespace App\Http\Controllers;

use App\Models\HomeAboutButton;
use Illuminate\Http\Request;

class HomeAboutButtonController extends Controller
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
        return view('backoffice.home.about.createHomeAboutButton');
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

        $store = new HomeAboutButton;
        $store->button = $request->button;
        $store->link = $request->link;
        $store->save();
        return redirect('/homeAboutContent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeAboutButton  $homeAboutButton
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAboutButton $homeAboutButton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAboutButton  $homeAboutButton
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAboutButton $homeAboutButton)
    {
        $edit = $homeAboutButton;
        return view('backoffice.home.about.editHomeAboutButton', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeAboutButton  $homeAboutButton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeAboutButton $homeAboutButton)
    {
        $validation = $request->validate([
            "button" => 'required',
            "link" => 'required'
        ]);
        
        $update = $homeAboutButton;
        $update->button = $request->button;
        $update->link = $request->link;
        $update->save();
        return redirect('/homeAboutContent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAboutButton  $homeAboutButton
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAboutButton $homeAboutButton)
    {
        $destroy = $homeAboutButton;
        $destroy->delete();
        return redirect('/homeAboutContent');
    }
}
