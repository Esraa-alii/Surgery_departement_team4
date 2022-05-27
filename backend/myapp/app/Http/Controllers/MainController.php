<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class MainController extends Controller
{
    function index(){
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
        
        if(Auth::attempt($user_data))
        {
            return redirect('/successlogin');
        }
        else {
            return back()->with('error', 'email or password is wrong');
        }

        
        
    }
    function successlogin (){
        return view('dashboard_patient');
    }

     function logout() {
        Auth::logout();
        return redirect('/');
      }




      

}
