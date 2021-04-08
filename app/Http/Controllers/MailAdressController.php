<?php

namespace App\Http\Controllers;

use App\Models\MailAdress;
use Illuminate\Http\Request;

class MailAdressController extends Controller
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
     * @param  \App\Models\MailAdress  $mailAdress
     * @return \Illuminate\Http\Response
     */
    public function show(MailAdress $mailAdress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MailAdress  $mailAdress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = MailAdress::find($id);
        return view('backoffice.contactForm.editContactEmailAddress', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MailAdress  $mailAdress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "email" => 'required'
        ]);

        $update = MailAdress::find($id);
        $update->email = $request->email;
        $update->save();
        return redirect('/contactMail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MailAdress  $mailAdress
     * @return \Illuminate\Http\Response
     */
    public function destroy(MailAdress $mailAdress)
    {
        //
    }
}
