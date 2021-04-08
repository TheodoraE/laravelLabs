<?php

namespace App\Http\Controllers;

use App\Models\ContactFormSubject;
use Illuminate\Http\Request;

class ContactFormSubjectController extends Controller
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
        $subjects = ContactFormSubject::all();
        return view('backoffice.contactForm.contactFormSubject', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.contactForm.createContactFormSubject');
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
            "subject" => 'required'
        ]);

        $store = new ContactFormSubject;
        $store->subject = $request->subject;
        $store->save();
        return redirect('/contactFormSubjects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactFormSubject  $contactFormSubject
     * @return \Illuminate\Http\Response
     */
    public function show(ContactFormSubject $contactFormSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactFormSubject  $contactFormSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactFormSubject $contactFormSubject)
    {
        $edit = $contactFormSubject;
        return view('backoffice.contactForm.editContactFormSubject', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactFormSubject  $contactFormSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactFormSubject $contactFormSubject)
    {
        $validation = $request->validate([
            "subject" => 'required'
        ]);

        $update = $contactFormSubject;
        $update->subject = $request->subject;
        $update->save();
        return redirect('/contactFormSubjects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactFormSubject  $contactFormSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactFormSubject $contactFormSubject)
    {
        $destroy = $contactFormSubject;
        $destroy->delete();
        return redirect('/contactFormSubjects');
    }
}
