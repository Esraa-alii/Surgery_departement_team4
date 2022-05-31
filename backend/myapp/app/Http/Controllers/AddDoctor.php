<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;


class AddDoctor extends Controller
{



    public function store()
    {


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

        if (request()->input("phone_number2") == '') {
            $num2 = null;
        } else {
            $num2 = request()->input('phone_number2');
        }

        $user = User::create([
            ...$attributes,
            'Role' => 'Doctor',
            'phone_number2' => $num2


        ]);


        // session()->flash('success', 'Account created successfully.');

        return redirect()->route('admindoctors')->with('success', 'Account created successfully.');
    }
}