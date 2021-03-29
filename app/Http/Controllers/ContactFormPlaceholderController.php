<?php

namespace App\Http\Controllers;

use App\Models\ContactFormPlaceholder;
use Illuminate\Http\Request;

class ContactFormPlaceholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placeholders = ContactFormPlaceholder::all();
        return view('backoffice.contactForm.contactFormPlaceholder', compact('placeholders'));
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
     * @param  \App\Models\ContactFormPlaceholder  $contactFormPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function show(ContactFormPlaceholder $contactFormPlaceholder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactFormPlaceholder  $contactFormPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactFormPlaceholder $contactFormPlaceholder)
    {
        $edit = $contactFormPlaceholder;
        return view('backoffice.contactForm.editContactFormPlaceholder', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactFormPlaceholder  $contactFormPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactFormPlaceholder $contactFormPlaceholder)
    {
        $validation = $request->validate([
            "placeholder" => 'required'
        ]);

        $update = $contactFormPlaceholder;
        $update->placeholder = $request->placeholder;
        $update->save();
        return redirect('/contactFormPlaceholders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactFormPlaceholder  $contactFormPlaceholder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactFormPlaceholder $contactFormPlaceholder)
    {
        //
    }
}
