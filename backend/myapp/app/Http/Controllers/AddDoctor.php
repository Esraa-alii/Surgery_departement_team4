<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;


class AddDoctor extends Controller
{



    public function store()
    {
        $insurance = NULL;

        $attributes = request()->validate([
            'email' => 'required|email|max:255|min:5|unique:users,email',
            'password' => 'required|max:255|min:5',
            'fname' => 'required|alpha',
            'mname' => 'required|alpha',
            'lname' => 'required|alpha',
            'birthdate' => 'required|date|before:today',
            'gender' => 'required',
            'ssn' => 'required|numeric|unique:users,ssn',
            'num1' => ['required', 'regex:/^01(\d){9}$/'],
            'num2' => ['regex:/^01(\d){9}$/', "nullable"],
        ]);

        if (request()->input("num2") == '') {
            $num2 = null;
        } else {
            $num2 = request()->input('num2');
        }

        $user = User::create([
            ...$attributes,
            'role' => 'doctor',
            'num2' => $num2


        ]);


        // session()->flash('success', 'Account created successfully.');

        return redirect()->route('admindoctors')->with('success', 'Account created successfully.');
    }
}
