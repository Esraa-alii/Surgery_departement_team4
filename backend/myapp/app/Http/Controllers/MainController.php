<?php

namespace App\Http\Controllers;

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
            return view('dashboard_patient');
        }
        if (Auth::user()->Role == "Admin") {
            return view('dashboard');
        }
        if (Auth::user()->Role == "Doctor") {
            return view('doctor_dashboard_appo');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/signin');
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

    function findyourdoctor(){
        $data = User::all();
        return view('find_doctor', ['members' => $data]);
    }

}

