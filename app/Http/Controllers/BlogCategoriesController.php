<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use Illuminate\Http\Request;

class BlogCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategories::all();
        return view('backoffice.blog.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.blog.createCategory');
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
            "category" => 'required'
        ]);

        $store = new BlogCategories;
        $store->category = $request->category;
        $store->save();
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategories $blogCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = BlogCategories::find($id);
        return view('backoffice.blog.editCategory', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "category" => 'required'
        ]);

        $update = BlogCategories::find($id);
        $update->category = $request->category;
        $update->save();
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategories  $blogCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = BlogCategories::find($id);
        $destroy->delete();
        return redirect('/categories');
    }
}
