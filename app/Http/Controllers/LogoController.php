<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class LogoController extends Controller
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
        $logos = Logo::all();
        return view('backoffice.main.logo', compact('logos'));
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
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        $edit = $logo;
        return view('backoffice.main.editLogo', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {
        // $validation = $request->validate([
        //     "url" => 'required',
        // ]);

        $update = $logo;
        $update->name = $request->name;
        // dd($request->url);

        if ($request->url == null){
            $update->url = $logo->url;
        } else {
            if ($update->url != "big-logo.png") {
                Storage::delete('storage/img/'.$update->url);
            }
            Storage::put('public/img', $request->url);
            $update->url = $request->file('url')->hashName();

            $img = Image::make('storage/img/'.$update->url)->resize(111,32);
            $img->save("img/miniPhotos/mini.jpg");
        }
        $update->save();
        return redirect('/logos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
