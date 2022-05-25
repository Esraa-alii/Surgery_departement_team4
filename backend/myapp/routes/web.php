<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
//////Patient dashboard

// Route::get('/', function () {
//     return view('dashboard_patient');
// })->name('patientdashboard');

// Route::get('/', function () {
//     return view('patient_signup');
// })->name('signup');

// Route::get('/', function () {
//         return view('patient_signin');
//     })->name('signin');
//-----------------------------------------------
    





//-----------------------------------------------
///// Doctor dashboard ---->
// Route::get('/', function () {
//     return view('doctor_dashboard_tasks');
// })->name('doctortasks');

Route::get('/doctorappointments', function () {
    return view('doctor_dashboard_appo');
})->name('doctorappo');

Route::get('/doctorpatients', function () {
    return view('doctor_dashboard_pat');
})->name('doctorpatients');
//-----------------------------------------------





//-----------------------------------------------

////// admin dashboard ---->
// Route::get('/', function () {
//     return view('dashboard');
// })->name('admindashboard');

Route::get('/admintasks', function () {
    return view('dashboard_ad_tasks');
})->name('admintasks');

Route::get('/adminpatients', function () {
    return view('dashboard_ad_patient');
})->name("adminpatients");

Route::get('/admindoctors', function () {
    return view('dashboard_ad_doctors');
})->name('admindoctors');

Route::get('/adminappointments', function () {
    return view('dashboard_ad_appo');
})->name('adminappo');
Route::post('patientSignin', [maincontroller::class,'checklogin']);




//-----------------------------------------------


