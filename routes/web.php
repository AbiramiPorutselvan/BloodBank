<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/',[App\Http\Controllers\HomeController::class, 'landingpage']);

Route::get('/signOut',[App\Http\Controllers\HomeController::class,'signOut']);

Route::get('/home', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/adminLogin', [App\Http\Controllers\HomeController::class, 'adminLogin']);
Route::get('/donorList',[App\Http\Controllers\AdminController::class,'donorList']);
Route::get('/completedRequest',[App\Http\Controllers\AdminController::class,'completedRequest']);

Route::get('/districts',[App\Http\Controllers\DistrictController::class, 'districts']);
Route::get('/createDistrict',[App\Http\Controllers\DistrictController::class,'createDistrict']);
Route::post('/district_store',[App\Http\Controllers\DistrictController::class,'districtStore']);

Route::get('/registration', [App\Http\Controllers\DonorController::class, 'registration']);
Route::post('/storedonorrequest',[App\Http\Controllers\DonorController::class, 'storedonorrequest']);
Route::get('/donorRequest',[App\Http\Controllers\DonorController::class, 'donorRequest']);
Route::get('/edit_donor/{id}',[App\Http\Controllers\DonorController::class,'edit_donor']);
Route::post('/storedonoredit',[App\Http\Controllers\DonorController::class, 'storedonoredit']);
Route::get('/accept_donor/{id}',[App\Http\Controllers\DonorController::class,'accept_donor']);

Route::get('/request', [App\Http\Controllers\BloodController::class, 'request']);
Route::post('/storerequest',[App\Http\Controllers\BloodController::class, 'storerequest']);
Route::get('/donoravailable',[App\Http\Controllers\BloodController::class, 'donoravailable']);
Route::get('/bloodRequest',[App\Http\Controllers\BloodController::class,'bloodRequest']);
Route::get('/edit_request/{id}',[App\Http\Controllers\BloodController::class,'edit_request']);
Route::post('/checkstatus',[App\Http\Controllers\BloodController::class,'checkstatus']);