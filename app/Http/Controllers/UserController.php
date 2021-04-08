<?php

namespace App\Http\Controllers;

use App\Mail\SendRegister;
use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
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
        $users = User::all();
        $userOK = $users->where('check',1);
        return view('backoffice.users', compact('users', 'userOK'));
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
        $edit = User::find($id);
        $functions = Position::all();
        $roles = Role::all();
        return view('backoffice.editUser', compact('edit', 'functions', 'roles'));
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
        $validation = $request->validate([
            "name" => 'required',
            "firstname" => 'required',
            "function_id" => 'required',
            "role_id" => 'required',
            "email" => 'required',
            "description" => 'required',
        ]);

        $update = User::find($id);
        
        if ($request->url == null) {
            $update->url = $update->url;
        } else {
            Storage::put('public/img', $request->url);
            $update->url = $request->file('url')->hashName();
        }
        $update->name = $request->name;
        $update->firstname = $request->firstname;
        $update->function_id = $request->function_id;
        $update->role_id = $request->role_id;
        $update->email = $request->email;
        $update->description = $request->description;
        $update->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = User::find($id);
        $destroy->delete();
        return redirect('/users');
    }

    public function valider($id)
    {
        $user = User::find($id);
        $user->check = 1;
        $user->save();
        Mail::to('tidoraa@gmail.com')->send(new SendRegister($user));
        return redirect('/users');
    }
}
