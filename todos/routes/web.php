<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

// resource/view/
// for welcome.blade.php
Route::get('/', [todosController ::class, 'index'])->name("todo.home");

// resource/view/layouts/
// for create.blade.php
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

Route::get('/update', function () {
    return view('update');
})->name("todo.update");

// create todo route
Route::post('/create',[todosController::class,'store'] )->name("todo.store");
