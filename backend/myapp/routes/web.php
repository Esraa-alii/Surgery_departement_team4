<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AddDoctor;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Appointment;
use App\Models\OperationRoom;
use App\Models\User;
use Google\Service\ServiceControl\Auth;
use Illuminate\Contracts\Foundation\MaintenanceMode;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//----------------------------------------------
///// Homepage
Route::get('/', function () {
    return view('homepage');
})->name('homepage');






//----------------------------------------------
//////Patient dashboard

Route::get('/patientdashboard', function () {
    return view('dashboard_patient', [
        'members' => User::where('Role', 'Doctor')->get(),
        'appointments' => Appointment::where('patient_ssn', auth()->user()->ssn)->get()->first()
    ]);
})->name('patientdashboard');



Route::get('/admindashboard', function () {
    return view('dashboard');
})->name('admindashboard');




//-----------------------------------------------






//-----------------------------------------------
///// Doctor dashboard ---->
// Route::get('/', function () {
//     return view('doctor_dashboard_tasks');
// })->name('doctortasks');

Route::get('/doctorappointments', function () {
    return view('doctor_dashboard_appo', [
        'appointments' => Appointment::where('doctor_ssn', auth()->user()->ssn)->get()->filter(function ($appointment) {
            return $appointment->cost != null and $appointment->surgery_name != null and $appointment->op_date != null;
        })
    ]);
})->name('doctorappo');

Route::get('/doctortasks', function () {
    return view('doctor_dashboard_tasks', [
        'appointments' => Appointment::where('doctor_ssn', auth()->user()->ssn)->get()->filter(function ($appointment) {
            return $appointment->cost == null or $appointment->surgery_name == null or $appointment->op_date == null;
        })
    ]);
})->name('doctortasks');

Route::get('/doctorpatients', function () {
    return view('doctor_dashboard_pat', [
        'appointments' => Appointment::where('doctor_ssn', auth()->user()->ssn)->get()->filter(function ($appointment) {
            return $appointment->cost != null or $appointment->surgery_name != null or $appointment->op_date != null or $appointment->room != null;
        })

    ]);
})->name('doctorpatients');
//-----------------------------------------------





//-----------------------------------------------
//// admin dashboard ---->


Route::middleware('admin')->group(function () {
});

Route::get('/admindashboard', function () {
    return view('dashboard');
})->name('admindashboard');

Route::get('/admintasks', function () {
    return view('dashboard_ad_tasks', [
        'appointments' => Appointment::where('operation_room_id', null)->get()->filter(function ($appointment) {
            return  $appointment->op_date != null;
        }),
        'rooms' => OperationRoom::all()

    ]);
})->name('admintasks');

Route::get('/adminpatients', [MainController::class, 'listpatient'])->name("adminpatients");
Route::get('/admindoctors', [MainController::class, 'listdoctor'])->name('admindoctors');


Route::get('/adminappointments', function () {
    return view('dashboard_ad_appo', [


        'appointments' => Appointment::all()->filter(function ($appointment) {
            return  $appointment->op_date != null and $appointment->room != null;
        }),

    ]);
})->name('adminappo');
Route::post('patientSignin', [MainController::class, 'checklogin']);
Route::get('/successlogin', [MainController::class, 'successlogin']);
Route::get('/logout', [MainController::class, 'logout'])->name('logout');
Route::post('/checklogin', [MainController::class, 'checklogin']);






Route::get('deletepatient/{id}', [MainController::class, 'deletepatient']);

Route::get('deletedoctor/{id}', [MainController::class, 'deletedoctor']);








//-----------------------------------------------


//-----------------------------------------------

/// sign up

Route::get("register", [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post("register", [RegisterController::class, 'store'])->middleware('guest');
//-----------------------------------------------




//-----------------------------------------------
/// sign in
Route::get('/signin', function () {
    return view('patient_signin');
})->name('signin')->middleware('guest');
//-----------------------------------------------


//-----------------------------------------------

// add doctor


// Route::get("adddoctor", [RegisterController::class, 'create'])->middleware('admin');
// Route::post("register", [RegisterController::class, 'store'])->middleware('admin');


Route::post("adddoctor", [AddDoctor::class, 'store']);



//-----------------------------------------------

// add apointment

Route::post("addappointment", [AppointmentController::class, 'store']);

// delete appointments

Route::get('cancelappointment/{patient_ssn}', [AppointmentController::class, 'destroy']);

Route::post('deleteappointment/{id}', [AppointmentController::class, 'delete']);

Route::post('updateappointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');


Route::post('updateappointmentroom/{id}', [AppointmentController::class, 'updateRoom'])->name('appointment.updateroom');

Route::get('test', function () {
    $a = Appointment::first();
    ddd($a->room);
});

// find your doctor

Route::get('/finddoctor', [MainController::class, 'findyourdoctor'])->name('finddoctor');

Route::get('send-email', [SendEmailController::class, 'index']);


Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from Surgery department',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\NotifyMail($details));

    dd("Email is Sent.");
});
