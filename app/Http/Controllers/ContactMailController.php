<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use App\Models\ContactFormSubject;
use App\Models\ContactMail;
use App\Models\HomeTestimonialsCard;
use App\Models\MailAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function __construct(){
        $this->middleware(["auth", "isWebMaster"])->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = ContactMail::orderBy('id', 'DESC')->get();
        $emailAdress = MailAdress::all();

        return view('backoffice.contactForm.contactEmails', compact('emails', 'emailAdress'));
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
        $validation = $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "subject_id" => 'required',
            "message" => 'required'
        ]);

        $subjects = ContactFormSubject::all();

        if ($subjects->find($request->subject_id)){
            $store = new ContactMail;
            $store->name = $request->name;
            $store->email = $request->email;
            $store->subject_id = $request->subject_id;
            $store->message = $request->message;
            $store->save();
    
            $email = MailAdress::first();
            Mail::to($email)->send(new MailSend($request));
            return redirect()->back()->with('status', 'Votre email à bien été envoyé !');
        } else {
            return redirect()->back()->withError('-- Commande non disponible --');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMail $contactMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMail $contactMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMail $contactMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactMail  $contactMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMail $contactMail)
    {
        //
    }
}
