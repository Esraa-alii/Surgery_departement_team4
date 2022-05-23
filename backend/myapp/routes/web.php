<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admintasks', function () {
    return view('dashboard_ad_tasks');
});

Route::get('/adminpatients', function () {
    return view('dashboard_ad_patient');
});

Route::get('/admindoctors', function () {
    return view('dashboard_ad_doctors');
});

Route::get('/adminappointments', function () {
    return view('dashboard_ad_appo');
});


