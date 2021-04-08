<?php

namespace App\Http\Controllers;

use App\Models\ContactFormEmail;
use Illuminate\Http\Request;

class ContactFormEmailController extends Controller
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
        $emails = ContactFormEmail::all();
        return view('backoffice.contactForm.contactFormEmail', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.contactForm.createContactFormEmail');
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
            "email" => 'required'
        ]);

        $store = new ContactFormEmail;
        $store->email = $request->email;
        $store->save();
        return redirect('/contactFormEmails');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactFormEmail  $contactFormEmail
     * @return \Illuminate\Http\Response
     */
    public function show(ContactFormEmail $contactFormEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactFormEmail  $contactFormEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactFormEmail $contactFormEmail)
    {
        $edit = $contactFormEmail;
        return view('backoffice.contactForm.editContactFormEmail', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactFormEmail  $contactFormEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactFormEmail $contactFormEmail)
    {
        $validation = $request->validate([
            "email" => 'required'
        ]);

        $update = $contactFormEmail;
        $update->email = $request->email;
        $update->save();
        return redirect('/contactFormEmails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactFormEmail  $contactFormEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactFormEmail $contactFormEmail)
    {
        $destroy = $contactFormEmail;
        $destroy->delete();
        return redirect('/contactFormEmails');
    }
}
