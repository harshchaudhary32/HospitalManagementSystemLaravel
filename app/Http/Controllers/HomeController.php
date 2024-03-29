<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\doctor;

use App\Models\appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {

        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
           $doctor = doctor::all();
    
        return view('user.home',compact('doctor')); 
        }
        $doctor = doctor::all();
    
        return view('user.home',compact('doctor'));
    }
    public function appointment(Request $request)
    {
        $data = new appointment;

        $data-> name=$request->name;
         $data-> email=$request->email;
          $data-> date=$request->date;
           $data-> phone=$request->number;
            $data-> message=$request->message;
             $data-> doctor=$request->doctor;
              $data-> status='In progress';

              if(Auth::id())
              {
                $data-> user_id=Auth::user()->id;
              }
            $data->save();

            return redirect()->back()->with('message','Appointment Request Successful. We will contact you soon.');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();

            return view('user.myappointment',compact('appoint'));

        }
        else
        {
           return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
            $data=appointment::find($id);
            $data->delete();
            return redirect()->back();
    }

    public function ourteam()
    {
        return view('rusabey/ourteam');
    }

     public function viewreport()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();

            return view('user.viewreport',compact('appoint'));

        }
        else
        {
           return redirect()->back();
        }
    }

}
