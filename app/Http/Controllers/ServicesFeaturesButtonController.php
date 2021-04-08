<?php

namespace App\Http\Controllers;

use App\Models\ServicesFeaturesButton;
use Illuminate\Http\Request;

class ServicesFeaturesButtonController extends Controller
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
     * @param  \App\Models\ServicesFeaturesButton  $servicesFeaturesButton
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesFeaturesButton $servicesFeaturesButton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesFeaturesButton  $servicesFeaturesButton
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesFeaturesButton $servicesFeaturesButton)
    {
        $edit = $servicesFeaturesButton;
        return view('backoffice.services.editServicesFeaturesButton', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesFeaturesButton  $servicesFeaturesButton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesFeaturesButton $servicesFeaturesButton)
    {
        $validation = $request->validate([
            "button" => 'required',
            "link" => 'required'
        ]);

        $update = $servicesFeaturesButton;
        $update->button = $request->button;
        $update->link = $request->link;
        $update->save();
        return redirect('/servicesFeaturesTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesFeaturesButton  $servicesFeaturesButton
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesFeaturesButton $servicesFeaturesButton)
    {
        //
    }
}
