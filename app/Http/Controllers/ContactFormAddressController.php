<?php

namespace App\Http\Controllers;

use App\Models\ContactFormAddress;
use Illuminate\Http\Request;

class ContactFormAddressController extends Controller
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
        $addresses = ContactFormAddress::all();
        return view('backoffice.contactForm.contactFormAddress', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.contactForm.createContactFormAddress');
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
            "address1" => 'required',
            "address2" => 'required'
        ]);

        $store = new ContactFormAddress;
        $store->address1 = $request->address1;
        $store->address2 = $request->address2;
        $store->save();
        return redirect('/contactFormAddress');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactFormAddress  $contactFormAddress
     * @return \Illuminate\Http\Response
     */
    public function show(ContactFormAddress $contactFormAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactFormAddress  $contactFormAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactFormAddress $contactFormAddress)
    {
        $edit = $contactFormAddress;
        return view('backoffice.contactForm.editContactFormAddress', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactFormAddress  $contactFormAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactFormAddress $contactFormAddress)
    {
        $validation = $request->validate([
            "address1" => 'required',
            "address2" => 'required'
        ]);

        $update = $contactFormAddress;
        $update->address1 = $request->address1;
        $update->address2 = $request->address2;
        $update->save();
        return redirect('/contactFormAddress');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactFormAddress  $contactFormAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactFormAddress $contactFormAddress)
    {
        $destroy = $contactFormAddress;
        $destroy->delete();
        return redirect('/contactFormAddress');
    }
}
