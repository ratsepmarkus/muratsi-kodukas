<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('index');});
Route::get('/kontakt', function () {return view('kontakt');});
Route::get('/tasud', function () {return view('tasud');});
Route::get('/eeskirjad', function () {return view('eeskirjad');});
Route::get('/uritused', function () {return view('uritused');});
Route::get('/visioon', function () {return view('visioon');});
Route::get('/galerii', function () {return view('galerii');});
Route::get('/taname', function () {return view('taname');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
