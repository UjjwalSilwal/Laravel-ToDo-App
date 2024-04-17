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

// edit todo route
Route::get('/edit/{id}',[todosController::class, 'edit'])->name("todo.edit");

// delete todo route
Route::get('/delete/{id}',[todosController::class,'delete'] )->name("todo.delete");

// update todo route
Route::post('/update',[todosController::class,'updateData'] )->name("todo.updateData");

// create todo route
Route::post('/create',[todosController::class,'store'] )->name("todo.store");



