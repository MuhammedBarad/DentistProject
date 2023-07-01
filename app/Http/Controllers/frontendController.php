<?php

namespace App\Http\Controllers;

use App\Models\appointmentType;
use App\Models\message;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class frontendController extends Controller
{


    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        $appo = appointmentType::all();
        $messages = message::all();
        return view('frontend.contact', compact('appo', 'messages'));
    }

    public function patient()
    {
        return view('frontend.patients');
    }

    public function service()
    {
        return view('frontend.services');
    }

    public function news()
    {
        $posts = post::paginate(6);
        return view('frontend.news', compact('posts'));
    }

    public function showProfile(){
        return view('frontend.profile');
    }

    public function profile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name'=> $request->name,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'zip'=>$request->zip,
            'state'=>$request->state,
        ]);
        return redirect()->back()->with('message','Updates Successfully');
    }
}
