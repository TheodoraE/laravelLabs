<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\ServicesFeaturesCard;
use Illuminate\Http\Request;

class ServicesFeaturesCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesFeaturesCards = ServicesFeaturesCard::all();
        return view('backoffice.services.servicesFeaturesCard', compact('servicesFeaturesCards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::all();
        return view('backoffice.services.createServicesFeaturesCard', compact('icons'));
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
            "icon_id" => 'required',
            "title" => 'required',
            "text" => 'required'
        ]);

        $store = new ServicesFeaturesCard;
        $store->icon_id = $request->icon_id;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->save();
        return redirect('/servicesFeaturesCards');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesFeaturesCard  $servicesFeaturesCard
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesFeaturesCard $servicesFeaturesCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesFeaturesCard  $servicesFeaturesCard
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesFeaturesCard $servicesFeaturesCard)
    {
        $edit = $servicesFeaturesCard;
        $icons = Icon::all();
        return view('backoffice.services.editServicesFeaturesCard', compact('edit', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesFeaturesCard  $servicesFeaturesCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesFeaturesCard $servicesFeaturesCard)
    {
        $validation = $request->validate([
            "icon_id" => 'required',
            "title" => 'required',
            "text" => 'required'
        ]);

        $update = $servicesFeaturesCard;
        $update->icon_id = $request->icon_id;
        $update->title = $request->title;
        $update->save();
        return redirect('/servicesFeaturesCards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesFeaturesCard  $servicesFeaturesCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesFeaturesCard $servicesFeaturesCard)
    {
        $destroy = $servicesFeaturesCard;
        $destroy->delete();
        return redirect('/servicesFeaturesCards');
    }
}
