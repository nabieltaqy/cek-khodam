<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhodamController;

Route::get('/', function () {
    return view('cekKhodam');
});

Route::post('/get-khodam', [KhodamController::class, 'getKhodam']);

Route::get('/create-khodam', [KhodamController::class, 'createKhodam'])->name('createKhodam');

Route::post('/inputKhodam', [KhodamController::class, 'inputKhodam'])->name('inputKhodam');