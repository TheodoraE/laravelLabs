<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        $commentsOK = $comments->where('check', 1);

        return view('backoffice.blog.comments', compact('comments', 'commentsOK'));
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
            "comment" => 'required',
        ]);

        $store = new Comment;
        if (Auth::check()){
            $store->url = Auth::user()->url;
            $store->name = Auth::user()->name;
            $store->firstname = Auth::user()->firstname;
            $store->email = Auth::user()->email;
        } else{
            Storage::put('public/img', $request->url);
            $store->url = $request->file('url')->hashName();
            $store->name = $request->name;
            $store->firstname = $request->firstname;
            $store->email = $request->email;
        }
        $previous = url()->previous();
        $store->post_id = (int)Str::afterLast($previous, '/');
        // dd((int)Str::afterLast($previous, '/'));
        
        $store->comment = $request->comment;
        $store->date = $request->date;
        $store->check = 0;

        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $destroy = $comment;
        $destroy->delete();
        return redirect('/comments');
    }

    public function validerComment($id)
    {
        $comment = Comment::find($id);
        $comment->check = 1;
        $comment->save();
        return redirect('/comments');
    }
}
