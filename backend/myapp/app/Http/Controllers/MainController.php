<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class MainController extends Controller
{
    function index()
    {
        return view('patient_signin');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password'  =>  'required|alpha_num|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {

            return redirect('/successlogin');
        } else {
            return back()->with('error', 'email or password is wrong');
        }
    }
    function successlogin()
    {
        if (Auth::user()->Role == "Patient") {
            $data = User::all();
            return view('dashboard_patient', [
                'members' => User::where('Role', 'Doctor')->get(),
                'appointments' => Appointment::where('patient_ssn', auth()->user()->ssn)->get()->first()
            ]);
        }
        if (Auth::user()->Role == "Admin") {
            return redirect('/analysis');
        }
        if (Auth::user()->Role == "Doctor") {
            return view('doctor_dashboard_appo', [
                'appointments' => Appointment::where('doctor_ssn', auth()->user()->ssn)->get()->filter(function ($appointment) {
                    return $appointment->cost != null and $appointment->surgery_name != null and $appointment->op_date != null;
                })
            ]);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    function listpatient()
    {
        $data = User::all();
        return view('dashboard_ad_patient', ['members' => $data]);
    }

    function listdoctor()
    {
        $data = User::all();
        return view('dashboard_ad_doctors', ['members' => $data]);
    }

    function deletepatient($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/adminpatients');
    }

    function deletedoctor($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/admindoctors');
    }

    function findyourdoctor()
    {
        $data = User::all();
        return view('find_doctor', ['members' => $data]);
    }

    function addcomplain(Request $req)
    {


        $complain = new Complain;
        $complain->name = $req->name;
        $complain->email = $req->myemail;
        $complain->complain = $req->text;
        $complain->save();
        return redirect('/');
    }
}
