<?php

namespace App\Http\Controllers;

use App\Models\HomeAboutButton;
use App\Models\HomeAboutContent;
use App\Models\HomeAboutTitle;
use App\Models\HomeAboutVideo;
use Illuminate\Http\Request;

class HomeAboutContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeAboutTitle = HomeAboutTitle::all();
        $homeAboutContent = HomeAboutContent::all();
        $homeAboutButton = HomeAboutButton::all();

        return view('backoffice.home.about.homeAboutContent', compact('homeAboutTitle', 'homeAboutContent', 'homeAboutButton'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.home.about.createHomeAboutContent');
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
            "text" => 'required'
        ]);

        $store = new HomeAboutContent;
        $store->text = $request->text;
        $store->save();
        return redirect('/homeAboutContent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeAboutContent  $homeAboutContent
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAboutContent $homeAboutContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAboutContent  $homeAboutContent
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAboutContent $homeAboutContent)
    {
        $edit = $homeAboutContent;
        return view('backoffice.home.about.editHomeAboutContent', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeAboutContent  $homeAboutContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeAboutContent $homeAboutContent)
    {
        $validation = $request->validate([
            "text" => 'required'
        ]);

        $update = $homeAboutContent;
        $update->text = $request->text;
        $update->save();
        return redirect('/homeAboutContent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAboutContent  $homeAboutContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAboutContent $homeAboutContent)
    {
        $destroy = $homeAboutContent;
        $destroy->delete();
        return redirect('/homeAboutContent');
    }
}
