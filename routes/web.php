<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/patientReg', function () {
    return view('patient.index');
});

Route::get('/patientInfo', function () {
    return view('patient.patientInfo');
});

