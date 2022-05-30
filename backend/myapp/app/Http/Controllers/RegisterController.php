<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;


class RegisterController extends Controller
{


    public function create()
    {
        return view('patient_signup');
    }

    public function store()
    {
        $insurance = NULL;

        // ddd(request()->all());

        $attributes = request()->validate([
            'email' => 'required|email|max:255|min:5|unique:users,email',
            'password' => 'required|max:255|min:5',
            'fname' => 'required|alpha',
            'mname' => 'required|alpha',
            'lname' => 'required|alpha',
            'birth_date' => 'required|date|before:today',
            'gender' => 'required',
            'ssn' => 'required|numeric|unique:users,ssn',
            'phone_number1' => ['required', 'regex:/^01(\d){9}$/'],
            'phone_number2' => ['regex:/^01(\d){9}$/', "nullable"],
        ]);
        if (request()->input("insurance_provider") == 'NULL') {
            $insurance = null; // 
        } else {
            $insurance = request()->insurance_provider;
        }
        if (request()->input("phone_number2") == '') {
            $num2 = null;
        } else {
            $num2 = request()->input('phone_number2');
        }

        $user = User::create([
            ...$attributes,
            'Role' => 'Patient',
            'insurance_provider' => $insurance,
            'phone_number2' => $num2


        ]);
        auth()->login($user);

        // session()->flash('success', 'Account created successfully.');

        return redirect()->route('patientdashboard')->with('success', 'Account created successfully.');
    }
}
