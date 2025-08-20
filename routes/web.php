<?php

use Illuminate\Support\Facades\Route;

//index route for RajaOngkirController
Route::get('/', [App\Http\Controllers\RajaOngkirController::class, 'index']);

//route to get cities based on province ID
Route::get('/cities/{provinceId}', [App\Http\Controllers\RajaOngkirController::class, 'getCities']);

//route to get districts based on city ID
Route::get('/districts/{cityId}', [App\Http\Controllers\RajaOngkirController::class, 'getDistricts']);

//route to post shipping cost
Route::post('/check-ongkir', [App\Http\Controllers\RajaOngkirController::class, 'checkOngkir']);