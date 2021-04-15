<?php

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/tasud', function () {
    return view('tasud');
});
Route::get('/eeskirjad', function () {
    return view('eeskirjad');
});
Route::get('/uritused', function () {
    return view('uritused');
});
Route::get('/visioon', function () {
    return view('visioon');
});
Route::get('/galerii', function () {
    return view('galerii');
});
Route::get('/taname', function () {
    return view('taname');
});

Route::get('/dashboard/blog', function(){})->middleware('auth')->name('blog');
