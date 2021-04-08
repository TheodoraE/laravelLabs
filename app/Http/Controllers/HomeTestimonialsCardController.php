<?php

namespace App\Http\Controllers;

use App\Models\HomeTestimonialsCard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeTestimonialsCardController extends Controller
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
        $users = User::where('check', 1)->get();
        return view('backoffice.home.testimonials.createHomeTestimonialsCard', compact('users'));
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
            'user_id' => 'required'
        ]);

        $store = new HomeTestimonialsCard;
        $store->span = $request->span;
        $store->text = $request->text;
        $store->user_id = $request->user_id;
        $store->check = 0;
        $store->save();
        return redirect('/homeTestimonialsTitle');
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
        $users = User::where('check', 1)->get();

        return view('backoffice.home.testimonials.editHomeTestimonialsCard', compact('edit', 'users'));
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
            "user_id" => 'required',
        ]);

        $update = $homeTestimonialsCard;
        $update->span = $request->span;
        $update->text = $request->text;
        $update->user_id = $request->user_id;
        $update->check = 0;

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
