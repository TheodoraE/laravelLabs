<?php

namespace App\Http\Controllers;

use App\Models\HomeTestimonialsCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeTestimonialsCardController extends Controller
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
        return view('backoffice.home.testimonials.createHomeTestimonialsCard');
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
            "text" => 'required',
            "url" => 'required',
            "name" => 'required',
            "function" => 'required',
        ]);

        $store = new HomeTestimonialsCard;
        $store->span = $request->span;
        $store->text = $request->text;
        Storage::put('public/img', $request->url);
        $store->url = $request->file('url')->hashName();
        $store->name = $request->name;
        $store->function = $request->function;
        $store->save();
        return redirect('homeTestimonialsTitle');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeTestimonialsCard  $homeTestimonialsCard
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTestimonialsCard $homeTestimonialsCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTestimonialsCard  $homeTestimonialsCard
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeTestimonialsCard $homeTestimonialsCard)
    {
        $edit = $homeTestimonialsCard;
        return view('backoffice.home.testimonials.editHomeTestimonialsCard', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTestimonialsCard  $homeTestimonialsCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeTestimonialsCard $homeTestimonialsCard)
    {
        $validation = $request->validate([
            "text" => 'required',
            "url" => 'required',
            "name" => 'required',
            "function" => 'required',
        ]);

        $update = $homeTestimonialsCard;
        $update->span = $request->span;
        $update->text = $request->text;
        if ($update->url != "big-logo.png") {
            Storage::delete('public/img/'.$update->url);
        }
        Storage::put('public/img', $request->url);
        $update->url = $request->file('url')->hashName();
        $update->name = $request->name;
        $update->function = $request->function;
        $update->save();
        return redirect('/homeTestimonialsTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTestimonialsCard  $homeTestimonialsCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeTestimonialsCard $homeTestimonialsCard)
    {
        $destroy = $homeTestimonialsCard;
        $destroy->delete();
        return redirect('/homeTestimonialsTitle');
    }
}
