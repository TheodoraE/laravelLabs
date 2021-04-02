<?php

namespace App\Http\Controllers;

use App\Models\ServicesDevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesDeviceController extends Controller
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
     * @param  \App\Models\ServicesDevice  $servicesDevice
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesDevice $servicesDevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesDevice  $servicesDevice
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesDevice $servicesDevice)
    {
        $edit = $servicesDevice;
        return view('backoffice.services.editServicesDevices', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesDevice  $servicesDevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesDevice $servicesDevice)
    {
        $validation = $request->validate([
            "url" => 'required'
        ]);

        $update = $servicesDevice;
        if ($update->url != "device.png") {
            Storage::delete('public/img/'.$update->url);
        }
        Storage::put('public/img', $request->url);
        $update->url = $request->file('url')->hashName();

        $update->save();
        return redirect('/servicesFeaturesTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesDevice  $servicesDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesDevice $servicesDevice)
    {
        //
    }
}
