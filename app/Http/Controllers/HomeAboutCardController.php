<?php

namespace App\Http\Controllers;

use App\Models\HomeAboutCard;
use App\Models\Icon;
use Illuminate\Http\Request;

class HomeAboutCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutCards = HomeAboutCard::all();
        return view('backoffice.home.about.homeAboutCard', compact('aboutCards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::all();
        return view('backoffice.home.about.createHomeAboutCard', compact('icons'));
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
            "classIcon" => 'required',
            "title" => 'required',
            "text" => 'required'
        ]);

        $store = new HomeAboutCard;
        $store->classCol = $request->classCol;
        $store->classIcon = $request->classIcon;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->save();
        return redirect('/homeAboutCards');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeAboutCard  $homeAboutCard
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAboutCard $homeAboutCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAboutCard  $homeAboutCard
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAboutCard $homeAboutCard)
    {
        $edit = $homeAboutCard;
        $icons = Icon::all();
        return view('backoffice.home.about.editHomeAboutCard', compact('edit', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeAboutCard  $homeAboutCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeAboutCard $homeAboutCard)
    {
        $validation = $request->validate([
            "classIcon" => 'required',
            "title" => 'required',
            "text" => 'required'
        ]);
        
        $update = $homeAboutCard;
        $update->classCol = $request->classCol;
        $update->classIcon = $request->classIcon;
        // dd($request);
        $update->title = $request->title;
        $update->text = $request->text;

        $update->save();
        return redirect('/homeAboutCards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAboutCard  $homeAboutCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAboutCard $homeAboutCard)
    {
        $destroy = $homeAboutCard;
        $destroy->delete();
        return redirect('/homeAboutCards');
    }
}
