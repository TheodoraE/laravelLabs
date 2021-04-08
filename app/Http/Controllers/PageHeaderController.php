<?php

namespace App\Http\Controllers;

use App\Models\PageHeader;
use Illuminate\Http\Request;

class PageHeaderController extends Controller
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
        $pageHeaders = PageHeader::all();
        return view('backoffice.main.pageHeader', compact('pageHeaders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.main.createPageHeader');
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
            "home" => 'required',
            "homeLink" => 'required',
            "page" => 'required'
        ]);

        $store = new PageHeader;
        $store->home = $request->home;
        $store->homeLink = $request->homeLink;
        $store->page = $request->page;
        $store->save();
        return redirect('/pageHeaders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageHeader  $pageHeader
     * @return \Illuminate\Http\Response
     */
    public function show(PageHeader $pageHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageHeader  $pageHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(PageHeader $pageHeader)
    {
        $edit =$pageHeader;
        return view('backoffice.main.editPageHeader', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageHeader  $pageHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageHeader $pageHeader)
    {
        $validation = $request->validate([
            "home" => 'required',
            "homeLink" => 'required',
            "page" => 'required'
        ]);

        $update = $pageHeader;
        $update->home = $request->home;
        $update->homeLink = $request->homeLink;
        $update->page = $request->page;
        $update->save();
        return redirect('/pageHeaders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageHeader  $pageHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageHeader $pageHeader)
    {
        $destroy = $pageHeader;
        $destroy->delete();
        return redirect('/pageHeaders');
    }
}
