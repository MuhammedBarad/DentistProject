<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = message::all();
        return view('backend.messages.AllMessages',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        message::create([

            'user_id'=>Auth()->user()->id,
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'message'=>$request->message
        ]);
        return redirect()->back()->with('message','Message Add Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $message = message::findOrFail($id);
        $message->update([
            'state' => $request->state
        ]);
        return redirect()->back()->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = message::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('message','Deleted Successfully');
    }
}
