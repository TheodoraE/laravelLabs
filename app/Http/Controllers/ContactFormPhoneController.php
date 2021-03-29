<?php

namespace App\Http\Controllers;

use App\Models\ContactFormPhone;
use Illuminate\Http\Request;

class ContactFormPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = ContactFormPhone::all();
        return view('backoffice.contactForm.contactFormPhone', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.contactForm.createContactFormPhone');
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
            "phone" => 'required'
        ]);

        $store = new ContactFormPhone;
        $store->phone = $request->phone;
        $store->save();
        return redirect('/contactFormPhones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactFormPhone  $contactFormPhone
     * @return \Illuminate\Http\Response
     */
    public function show(ContactFormPhone $contactFormPhone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactFormPhone  $contactFormPhone
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactFormPhone $contactFormPhone)
    {
        $edit = $contactFormPhone;
        return view('backoffice.contactForm.editContactFormPhone', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactFormPhone  $contactFormPhone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactFormPhone $contactFormPhone)
    {
        $validation = $request->validate([
            "phone" => 'required'
        ]);

        $update = $contactFormPhone;
        $update->phone = $request->phone;
        $update->save();
        return redirect('/contactFormPhones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactFormPhone  $contactFormPhone
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactFormPhone $contactFormPhone)
    {
        $destroy = $contactFormPhone;
        $destroy->delete();
        return redirect('/contactFormPhones');
    }
}
