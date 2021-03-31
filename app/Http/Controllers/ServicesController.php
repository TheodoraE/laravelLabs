<?php

namespace App\Http\Controllers;

use App\Models\ContactFormAddress;
use App\Models\ContactFormEmail;
use App\Models\ContactFormPhone;
use App\Models\ContactFormPlaceholder;
use App\Models\ContactFormSubject;
use App\Models\ContactFormSubtitle;
use App\Models\ContactFormTitle;
use App\Models\Footer;
use App\Models\HomeServicesTitle;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\PageHeader;
use App\Models\ServicesCard;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Main
        $logo = Logo::all();
        $footer = Footer::all();
        // Navbar
        $navbar = Navbar::all();
        // PageHeader
        $pageHeader = PageHeader::all();
        // contactForm
        $contactFormTitle = ContactFormTitle::all();
        $contactFormSubtitle = ContactFormSubtitle::all();
        $contactFormAddress = ContactFormAddress::all();
        $contactFormPhone = ContactFormPhone::all();
        $contactFormEmail = ContactFormEmail::all();
        $contactFormPlaceholder = ContactFormPlaceholder::all();
        $contactFormSubjects = ContactFormSubject::all();


        $homeServicesTitle = HomeServicesTitle::all();
        $servicesCard = ServicesCard::all();
        
        return view('pages.services', compact('logo', 'navbar', 'footer', 'pageHeader', 'contactFormTitle', 'contactFormSubtitle', 'contactFormAddress', 'contactFormPhone', 'contactFormEmail', 'contactFormPlaceholder', 'contactFormSubjects', 'homeServicesTitle', 'servicesCard'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
