<?php

namespace App\Http\Controllers;

use App\Models\appointmentType;
use Illuminate\Http\Request;

class AppointmentTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $appointments = appointmentType::all();
       return view('backend.Appointments_Category.AllAppointmentsCategory',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Appointments_Category.createAppointmentCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        appointmentType::create([
            'appointment_type'=>$request->appointment_type,
        ]);
        return redirect('/appointmentsCategory')->with('message','Created Successfully');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $appointment = appointmentType::findOrFail($id);
        return view('backend.Appointments_Category.editAppointmentCategory',compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $appointment = appointmentType::findOrFail($id);
        $appointment->update([
            'appointment_type'=>$request->appointment_type,
        ]);
        return redirect('/appointmentsCategory')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $appointment = appointmentType::findOrFail($id);
        $appointment->delete();
        return redirect('/appointmentsCategory')->with('message','Deleted Successfully');
    }
}
