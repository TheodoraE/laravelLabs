<?php

namespace App\Http\Controllers;

use App\Models\HomeCarousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $homeCarousels = HomeCarousel::all();
        return view('backoffice.home.carousel', compact('homeCarousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.home.createCarousel');
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
            "url" => 'required'
        ]);

        $carousel = HomeCarousel::orderBy('id', 'DESC')->first()->id;
        // dd($carousel);

        $store = new HomeCarousel;
        Storage::put('public/img', $request->url);
        $store->url = $request->file('url')->hashName();
        $store->order = $carousel+1;
        $store->save();
        return redirect('/homeCarousels');
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
        $edit = $homeCarousel;
        return view('backoffice.home.editCarousel', compact('edit'));
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
        // $validation = $request->validate([
        //     "url" => 'required'
        // ]);

        $update = $homeCarousel;
        
        if ($update->url == null){
            $update->url = $homeCarousel->url;
        } else {
            Storage::put('public/img', $request->url);
            $update->url = $request->file('url')->hashName();
        }
        $update->order = $request->id;
        $update->save();
        return redirect('/homeCarousels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarousel  $homeCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeCarousel $homeCarousel)
    {
        $destroy = $homeCarousel;
        $destroy->delete();
        return redirect('/homeCarousels');
    }
}
