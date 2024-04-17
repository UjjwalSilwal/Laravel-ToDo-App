<?php

use Illuminate\Support\Facades\Route;

// resource/view/
// for welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

// resource/view/layouts/
// for create.blade.php
Route::get('/create', function () {
    return view('create');
});

Route::get('/edit', function () {
    return view('update');
});
