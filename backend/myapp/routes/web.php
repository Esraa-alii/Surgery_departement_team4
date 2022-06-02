<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AddDoctor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Contracts\Foundation\MaintenanceMode;
use Illuminate\Support\Facades\Hash;

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
    return view('dashboard_patient');
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
    return view('doctor_dashboard_appo');
})->name('doctorappo');

Route::get('/doctortasks', function () {
    return view('doctor_dashboard_tasks');
})->name('doctortasks');

Route::get('/doctorpatients', function () {
    return view('doctor_dashboard_pat');
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
    return view('dashboard_ad_tasks');
})->name('admintasks');

Route::get('/adminpatients', [MainController::class, 'listpatient'])->name("adminpatients");
Route::get('/admindoctors', [MainController::class, 'listdoctor'])->name('admindoctors');


Route::get('/adminappointments', function () {
    return view('dashboard_ad_appo');
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

Route::get("register", [RegisterController::class, 'create'])->middleware('guest');
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



