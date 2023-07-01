<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function home(){
    //     $users = User::all();
    //     return view('backend.index',compact('users'));
    // }

    public function index()
    {
        $users = User::all();
        return view('backend.Users.AllUsers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Users.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'is_admin'=>$request->is_admin,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'zip'=>$request->zip,
            'state'=>$request->state,
        ]);
        return redirect('/users')->with('message','User Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.Users.showUser',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.Users.editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'is_admin'=>$request->is_admin,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'zip'=>$request->zip,
            'state'=>$request->state,
        ]);
        return redirect('/users')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users')->with('message','Deleted Successfully');
    }
}
