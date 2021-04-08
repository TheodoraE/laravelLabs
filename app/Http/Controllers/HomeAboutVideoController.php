<?php

namespace App\Http\Controllers;

use App\Models\HomeAboutVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeAboutVideoController extends Controller
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
        $homeAboutVideo = HomeAboutVideo::all();
        return view('backoffice.home.about.homeAboutVideo', compact('homeAboutVideo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.home.about.createHomeAboutVideo');
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
            "url" => 'required',
            "youtubeLink" => 'required'
        ]);

        $store = new HomeAboutVideo;
        $store->url = $request->url;
        $store->youtubeLink = $request->youtubeLink;
        $store->save();
        return redirect('/homeAboutVideo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeAboutVideo  $homeAboutVideo
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAboutVideo $homeAboutVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAboutVideo  $homeAboutVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAboutVideo $homeAboutVideo)
    {
        $edit = $homeAboutVideo;
        return view('backoffice.home.about.editHomeAboutVideo', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeAboutVideo  $homeAboutVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeAboutVideo $homeAboutVideo)
    {
        $validation = $request->validate([
            "url" => 'required',
            "youtubeLink" => 'required'
        ]);

        $update = $homeAboutVideo;

        $update->youtubeLink = $request->youtubeLink;

        if ($update->url != "video.jpg") {
            Storage::delete('public/img/'.$update->url);
        }
        Storage::put('public/img', $request->url);
        $update->url = $request->file('url')->hashName();
        
        $update->save();
        return redirect('/homeAboutVideo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAboutVideo  $homeAboutVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAboutVideo $homeAboutVideo)
    {
        $destroy = $homeAboutVideo;
        $destroy->delete();
        return redirect('/homeAboutVideo');
    }
}
