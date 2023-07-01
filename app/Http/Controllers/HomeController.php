<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\message;
use App\Models\appointment;
use App\Models\appointmentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class HomeController extends Controller
{

    public function home()
    {
        return view('backend.index');
    }

    public function index()
    {
        if (Auth::check()) {
            if (Auth()->user()->is_admin == 1) {
                $users = User::all();
                $appo = appointmentType::all();
                return view('frontend.index', compact('users', 'appo'));
            } elseif (Auth()->user()->is_admin == 0) {
                $appo = appointmentType::all();
                return view('frontend.index', compact('appo'));
            }
        } else {
            $appo = appointmentType::all();
            return view('frontend.index', compact('appo'));
        }
    }
    public function showAdminProfile()
    {
        return view('backend.profile');
    }
    public function updateAdminProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' => $request->address,
            'zip' => $request->zip,
            'state' => $request->state,
        ]);
        return redirect()->back()->with('message','Updated Successfully');
    }
    public function home_appointment(Request $request)
    {

        if (Auth::check()) {
            appointment::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_id' => Auth::check() ? Auth()->user()->id : null,
                'appointment_type' => $request->appointment_type,
                'date' => $request->date,
                'email' => $request->email,
                'note' => $request->note,
                'state' => "Reviewing",
            ]);
            return redirect()->back()->with('message','Appo Add Successfully');
        } else {
            return redirect('/login');
        }
    }
    public function contact_appointment(Request $request)
    {
        if (Auth::check()) {
            appointment::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_id' => Auth()->user()->id,
                'appointment_type' => $request->appointment_type,
                'date' => $request->date,
                'email' => $request->email,
                'note' => $request->note,
                'state' => "Reviewing",
            ]);
            return redirect()->back()->with('message','Appo Add Successfully');
        } else {
            return redirect('/login');
        }
    }

    public function showMyAppointments($id)
    {
        $Users = User::findOrFail($id);
        $appo = $Users->appointments;

        return view('frontend.myAppointments', compact('appo'));
    }
    public function deleteMyAppointments($id)
    {
        $appo = appointment::findOrFail($id);
        $appo->delete();
        return redirect()->back()->with('message','Appo Deleted Successfully');
    }
    public function showMyMessages(Request $request,$id)
    {
        $Users = User::findOrFail($id);
        $messages = $Users->messages;
        return view('frontend.MyMessages', compact('messages'));
    }
    public function deleteMyMessage($id)
    {
        $appo = message::findOrFail($id);
        $appo->delete();
        return redirect()->back()->with('message','Message Deleted Successfully');
    }
}
