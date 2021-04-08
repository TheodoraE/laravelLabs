<?php

namespace App\Http\Controllers;

use App\Models\HomeAboutTitle;
use Illuminate\Http\Request;

class HomeAboutTitleController extends Controller
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
        return view('backoffice.home.about.createHomeAboutTitle');
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
            "title" => 'required'
        ]);

        $store = new HomeAboutTitle;
        $store->title = $request->title;
        $store->save();
        return redirect('/homeAboutContent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeAboutTitle  $homeAboutTitle
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAboutTitle $homeAboutTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAboutTitle  $homeAboutTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAboutTitle $homeAboutTitle)
    {
        $edit = $homeAboutTitle;
        return view('backoffice.home.about.editHomeAboutTitle', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeAboutTitle  $homeAboutTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeAboutTitle $homeAboutTitle)
    {
        $validation = $request->validate([
            "title" => 'required'
        ]);

        $update = $homeAboutTitle;
        $update->title = $request->title;
        $update->save();
        return redirect('/homeAboutContent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAboutTitle  $homeAboutTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAboutTitle $homeAboutTitle)
    {
        $destroy = $homeAboutTitle;
        $destroy->delete();
        return redirect('homeAboutContent');
    }
}
