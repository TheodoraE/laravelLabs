<?php

namespace App\Http\Controllers;

use App\Models\ServicesDevice;
use App\Models\ServicesFeaturesButton;
use App\Models\ServicesFeaturesTitle;
use Illuminate\Http\Request;

class ServicesFeaturesTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesFeaturesTitle = ServicesFeaturesTitle::all();
        $servicesDevices = ServicesDevice::all();
        $servicesfeaturesButton = ServicesFeaturesButton::all();
    
        return view('backoffice.services.servicesFeatures', compact('servicesFeaturesTitle', 'servicesDevices', 'servicesfeaturesButton'));
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
     * @param  \App\Models\ServicesFeaturesTitle  $servicesFeaturesTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesFeaturesTitle $servicesFeaturesTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesFeaturesTitle  $servicesFeaturesTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesFeaturesTitle $servicesFeaturesTitle)
    {
        $edit = $servicesFeaturesTitle;
        return view('backoffice.services.editServicesFeaturesTitle', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesFeaturesTitle  $servicesFeaturesTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesFeaturesTitle $servicesFeaturesTitle)
    {
        $validation = $request->validate([
            "title" => 'required'
        ]);

        $update = $servicesFeaturesTitle;
        $update->title = $request->title;
        $update->save();
        return redirect('/servicesFeaturesTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesFeaturesTitle  $servicesFeaturesTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesFeaturesTitle $servicesFeaturesTitle)
    {
        //
    }
}
