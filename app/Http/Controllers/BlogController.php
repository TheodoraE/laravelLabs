<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\PageHeader;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        // Newsletter
        $newsletters = Newsletter::all();

        $posts = Post::all();
        $postsOK = $posts->where('check', 1);

        // Categories
        $categories = BlogCategories::all();
        // Tags
        $tags = Tag::all();

        $commentsAll = Comment::all();
        $commentsOK = $commentsAll->where('check', 1);
        // $commentsId = $commentsOK->where('post_id', $post->id);

        $paginationPosts  =  Post::orderBy('id', 'DESC')->paginate(3);

        return view('pages.blog', compact('logo', 'navbar', 'footer', 'pageHeader', 'newsletters', 'posts', 'postsOK', 'categories', 'tags', 'commentsAll', 'commentsOK', 'paginationPosts'));
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
