<?php

namespace App\Http\Controllers;

use App\Models\doktor;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $doktors = doktor::all();
       return view('backend.Doktors.AllDoktors',compact('doktors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Doktors.createDoktor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        doktor::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'experience'=>$request->experience,
            'description'=>$request->description,
            'email'=>$request->email,
            'whatsapp'=>$request->whatsapp,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
        ]);
        return redirect('/doktors')->with('message','Doktor Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $doktor = doktor::findOrFail($id);
        return view('backend.Doktors.showDoktor',compact('doktor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doktor = doktor::findOrFail($id);
        return view('backend.Doktors.editDoktor',compact('doktor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $doktor = doktor::findOrFail($id);
        $doktor->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'experience'=>$request->experience,
            'description'=>$request->description,
            'email'=>$request->email,
            'whatsapp'=>$request->whatsapp,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
        ]);
        return redirect('/doktors')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doktor = doktor::findOrFail($id);
        $doktor->delete();
        return redirect('/doktors')->with('message','Deleted Successfully');
    }
}
