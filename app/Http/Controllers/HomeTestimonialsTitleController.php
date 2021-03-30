<?php

namespace App\Http\Controllers;

use App\Models\HomeTestimonialsCard;
use App\Models\HomeTestimonialsTitle;
use Illuminate\Http\Request;

class HomeTestimonialsTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonialsTitle = HomeTestimonialsTitle::all();
        $testimonialsCards = HomeTestimonialsCard::all();

        return view('backoffice.home.testimonials.homeTestimonials', compact('testimonialsTitle', 'testimonialsCards'));
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
     * @param  \App\Models\HomeTestimonialsTitle  $homeTestimonialsTitle
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTestimonialsTitle $homeTestimonialsTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTestimonialsTitle  $homeTestimonialsTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeTestimonialsTitle $homeTestimonialsTitle)
    {
        $edit = $homeTestimonialsTitle;
        return view('backoffice.home.testimonials.editHomeTestimonialsTitle', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTestimonialsTitle  $homeTestimonialsTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeTestimonialsTitle $homeTestimonialsTitle)
    {
        $validation = $request->validate([
            "title" => 'required'
        ]);

        $update = $homeTestimonialsTitle;
        $update->title = $request->title;
        $update->save();
        return redirect('/homeTestimonialsTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTestimonialsTitle  $homeTestimonialsTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeTestimonialsTitle $homeTestimonialsTitle)
    {
        //
    }
}
