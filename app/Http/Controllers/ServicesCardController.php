<?php

namespace App\Http\Controllers;

use App\Models\HomeServicesTitle;
use App\Models\Icon;
use App\Models\ServicesCard;
use Illuminate\Http\Request;

class ServicesCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $homeServicesTitle = HomeServicesTitle::all();
        $servicesCard = ServicesCard::all();
        $icons = Icon::all();

        return view('backoffice.services.servicesSection', compact('servicesCard', 'icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::all();
        return view('backoffice.services.createServicesSection', compact('icons'));
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

        $store = new ServicesCard;
        $store->icon_id = $request->icon_id;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->save();
        return redirect('/servicesSection');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesCard  $servicesCard
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesCard $servicesCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesCard  $servicesCard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ServicesCard::find($id);
        // dd()
        $icons = Icon::all();
        return view('backoffice.services.editServicesSection', compact('edit', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesCard  $servicesCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "icon_id" => 'required',
            "title" => 'required',
            "text" => 'required'
        ]);

        $update = ServicesCard::find($id);
        $update->icon_id = $request->icon_id;
        $update->title = $request->title;
        $update->text = $request->text;
        $update->save();
        return redirect('/servicesSection');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesCard  $servicesCard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ServicesCard::find($id);
        $destroy->delete();
        return redirect('/servicesSection');
    }
}
