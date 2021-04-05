<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use App\Models\BlogTag;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\PageHeader;
use App\Models\PostTag;
use App\Models\User;
use Illuminate\Http\Request;

class PostTagController extends Controller
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
     * @param  \App\Models\PostTag  $postTag
     * @return \Illuminate\Http\Response
     */
    public function show(PostTag $postTag)
    {
        // Main
        $logo = Logo::all();
        $footer = Footer::all();
        // Navbar
        $navbar = Navbar::all();
        // Page Header
        $pageHeader = PageHeader::all();

        // User
        $usersOK = User::where('check',1)->get();

        // Post
        $post = $postTag;

        // Side
        $categories = BlogCategories::all();
        $tags = BlogTag::all();
        $newsletters = Newsletter::all();


        return view('pages.showBlog', compact('logo', 'footer', 'navbar', 'pageHeader', 'posts', 'categories', 'tags', 'newsletters', 'usersOK'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostTag  $postTag
     * @return \Illuminate\Http\Response
     */
    public function edit(PostTag $postTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostTag  $postTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostTag $postTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostTag  $postTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTag $postTag)
    {
        //
    }
}
