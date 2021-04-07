<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use App\Models\BlogTag;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\PageHeader;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $postsOK = $posts->where('check', 1);
        $postsNO = $posts->where('check', 0);
        return view('backoffice.blog.posts', compact('posts', 'postsOK', 'postsNO'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategories::all();
        $tags = Tag::all();
        return view('backoffice.blog.createPost', compact('categories', 'tags'));
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
            "url" => 'required',
            "title" => 'required',
            "text" => 'required',
            "category_id" => 'required',
        ]);
        
        $store = new Post;
        Storage::put('public/img', $request->url);
        $store->url = $request->file('url')->hashName();
        $store->title = $request->title;
        $store->text = $request->text;
        $store->category_id = $request->category_id;
        $store->check = 0;
        $store->user_id = Auth::id();
        $store->save();
        // dd($store->id);
        foreach ($request->tag as $item) {
            $store->tags()->attach($item, ['post_id' => $store->id]);
        }

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
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

        // Side
        $categories = BlogCategories::all();
        $tags = Tag::all();
        $newsletters = Newsletter::all();

        $commentsAll = Comment::all();
        $commentsOK = $commentsAll->where('check', 1);
        $commentsId = $commentsOK->where('post_id', $post->id);
        
        // $comments = Comment::all();


        return view('pages.showBlog', compact('logo', 'footer', 'navbar', 'pageHeader', 'post', 'categories', 'tags', 'newsletters', 'usersOK', 'commentsOK', 'commentsAll', 'commentsId'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // $edit = $post;
        $categories = BlogCategories::all();
        $tags = Tag::all();
        return view('backoffice.blog.editPost', compact('categories', 'tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validation = $request->validate([
            "url" => 'required',
            "title" => 'required',
            "text" => 'required',
            "category_id" => 'required',
        ]);

        $update = $post;
        // if($update->url->)
        // Condition Storage
        // Storage::delete('public/img/'.$update->url);
        Storage::put('public/img', $request->url);
        $update->url = $request->file('url')->hashName();
        $update->title = $request->title;
        $update->text = $request->text;
        $update->category_id = $request->category_id;
        $update->check = 1;
        $update->user_id = Auth::id();
        $update->save();

        $update->tags()->detach();
        foreach ($request->tag as $item) {
            $update->tags()->attach($item, ['post_id' => $update->id]);
        }

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $destroy = $post;
        $destroy->delete();
        return redirect('/posts');
    }

    public function search(Request $request)
    {
        // Main
        $logo = Logo::all();
        $footer = Footer::all();
        // Navbar
        $navbar = Navbar::all();

        $pageHeader = PageHeader::all();
        // Newsletter
        $newsletters = Newsletter::all();
        $categories = BlogCategories::all();
        $tags = Tag::all();

        $commentsAll = Comment::all();


        $search = $request->input('search');
        $posts = Post::query()->where('title', 'LIKE', "%{$search}%")->orWhere('text', 'LIKE', "%{$search}%")->get();

        return view('pages.searchBlog', compact('logo', 'footer', 'navbar', 'pageHeader', 'newsletters', 'categories', 'tags', 'posts', 'commentsAll'));
    }

    public function filterCategory($id)
    {
        // Main
        $logo = Logo::all();
        $footer = Footer::all();
        // Navbar
        $navbar = Navbar::all();

        $pageHeader = PageHeader::all();
        // Newsletter
        $newsletters = Newsletter::all();

        $categories = BlogCategories::all();
        $tags = Tag::all();

        $posts = Post::all();
        $postsCategory = $posts->where('category_id', $id);
        $commentsAll = Comment::all();
        // dd($posts);

        return view('pages.showCategory', compact('logo', 'footer', 'navbar', 'pageHeader', 'newsletters', 'categories', 'tags', 'posts', 'postsCategory', 'commentsAll'));
    }

    public function filterTag($id)
    {
        // Main
        $logo = Logo::all();
        $footer = Footer::all();
        // Navbar
        $navbar = Navbar::all();

        $pageHeader = PageHeader::all();
        // Newsletter
        $newsletters = Newsletter::all();

        $categories = BlogCategories::all();
        $tags = Tag::all();
        $commentsAll = Comment::all();


        $postsAll = Post::all();
        $postTag = DB::table('post_tag')->get();
        $postsTaguer = $postTag->where('tag_id', $id);
        $posts = Post::all();
        // dd($postsTaguer);
        // $posts = $postsAll->where($postsTaguer->post_id, $postsAll->id);
        
        // dd($posts);
        // foreach ($postsTaguer as $item) {
        //     foreach ($postsAll as $post) {
        //         $posts = $postsAll->where($item->post_id, "=", $post->id);
        //     }
        // }
        // dd($posts);

        return view('pages.showTag', compact('logo', 'footer', 'navbar', 'pageHeader', 'newsletters', 'categories', 'tags', 'commentsAll', 'postsTaguer', 'posts'));
    }

    public function validerPost($id)
    {
        $post = Post::find($id);
        $post->check = 1;
        $post->save();
        return redirect('/posts');
    }
}
