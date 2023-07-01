<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use App\Models\appointmentType;
class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $appointments = appointment::all();
        return view('backend.Appointments.AllAppointments',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appo = appointmentType::all();
        return view('backend.Appointments.createAppointments',compact('appo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        appointment::create([
            'user_id'=>Auth()->user()->id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'appointment_type'=>$request->appointment_type,
            'date'=>$request->date,
            'email'=>$request->email,
            'note'=>$request->note,
            'state'=>"Reviewing",
        ]);
        return redirect('/appointments')->with('message','Appo Created Successfully');
    }

    public function update(Request $request,$id){
        $appointment_change = appointment::findOrFail($id);
        $appointment_change->update([
            'state'=>$request->state
        ]);
        return redirect()->back()->with('message','Updated Successfully');
    }

    public function show($id)
    {
        $appointment = appointment::findOrFail($id);
        return view('backend.Appointments.showAppointment',compact('appointment'));
    }



    public function destroy($id)
    {
        $appointment = appointment::findOrFail($id);
        $appointment->delete();
        return redirect('/appointments')->with('message','Deleted Successfully');
    }


}
