<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
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
        $navbars = Navbar::all();
        return view('backoffice.main.navbar', compact('navbars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.main.createNavbar');
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
            "link" => 'required',
            "page" => 'required'
        ]);

        $store = new Navbar;
        $store->link = $request->link;
        $store->page = $request->page;

        $store->save();
        return redirect('/navbars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        $edit = $navbar;
        return view('backoffice.main.editNavbar', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        $validation = $request->validate([
            "link" => 'required',
            "page" => 'required'
        ]);

        $update = $navbar;
        $update->link = $request->link;
        $update->page = $request->page;
        $update->save();
        return redirect('/navbars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        $destroy = $navbar;
        $destroy->delete();
        return redirect('/navbars');
    }
}
