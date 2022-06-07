<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $attributes = request()->validate([
            'doctor' => 'required',

        ]);

        $user = Appointment::create([
            'doctor_ssn' => $request->doctor,
            'patient_ssn' => $request->user()->ssn,
        ]);



        return redirect()->route('patientdashboard')->with('success_appointment', 'Sent to the doctor an appointment request successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $attr = $request->validate([
            'surgery_name' => ['required', 'string', 'min:3', 'max:255'],
            'op_date' => ['required', 'date', 'after:today'],
            'cost' => ['required', 'numeric', 'min:1200', 'max:20000'],
        ]);


        Appointment::whereId($id)->update($attr);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRoom(Request $request, int $id)
    {
        // ddd($request->all());
        Appointment::whereId($id)->update([
            'operation_room_id' => $request['operation_room_id']
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($patient_ssn)
    {

        $data = Appointment::firstWhere('patient_ssn', $patient_ssn);
        $data->delete();
        return redirect('/patientdashboard');
    }

    public function delete($id)
    {
        Appointment::find($id)->delete();
        return redirect()->back();
    }
}
