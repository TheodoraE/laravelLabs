<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSend;
use App\Models\MailAdress;
use App\Models\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterMailController extends Controller
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
        $newsletter = NewsletterMail::all();
        return view('backoffice.newsletter.newsletterMail', compact('newsletter'));

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
            "email" => 'required|email|unique:newsletter_mails,email'
        ]);


        $store = new NewsletterMail;
        $store->email = $request->email;
        $store->save();

        $email = MailAdress::first();
        Mail::to($email)->send(new NewsletterSend($request));
        return redirect('/#newsletter-section')->with('message', 'Vous êtes maintenant inscrit·e à la Newsletter !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterMail $newsletterMail)
    {
        $edit = $newsletterMail;
        return view('backoffice.newsletter.editNewsletterMail', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsletterMail $newsletterMail)
    {
        $validation = $request->validate([
            "email" => 'required|email'
        ]);
        if ($newsletterMail->email != $request->email) {
            $validation = $request->validate([
                "email" => 'unique:newsletter_mails,email'
            ]);
        };

        $update = $newsletterMail;
        $update->email = $request->email;
        $update->save();
        return redirect('/newsletterMail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterMail $newsletterMail)
    {
        $destroy = $newsletterMail;
        $destroy->delete();
        return redirect('/newsletterMail');
    }
}
