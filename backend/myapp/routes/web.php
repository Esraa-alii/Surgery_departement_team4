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

// Route::get('/', function () {
//     return view('patient_signin');
// });
Route::get('/', [MainController::class,'index']);
Route::post('/checklogin', [MainController::class, 'checklogin']);
Route::get('/successlogin', [MainController::class, 'successlogin']);
Route::get('/logout', [MainController::class, 'logout']);

Route::get('/dashboardpatient', function(){
    return view('dashboard_patient');   
});

Route::get('/admintasks', function () {
    return view('dashboard_ad_tasks');
})->name('admintasks');

Route::get('/adminpatients', function () {
    return view('dashboard_ad_patient');
});

Route::get('/admindoctors', function () {
    return view('dashboard_ad_doctors');
})->name('doctors');

Route::get('/adminappointments', function () {
    return view('dashboard_ad_appo');
})->name('adminappo');
Route::post('patientSignin', [maincontroller::class,'checklogin']);






