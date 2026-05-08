<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller as Controller;
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/index', [Controller::class, 'index'])->name('index');
Route::post('/store', [Controller::class, 'store'])->name('store');
Route::get('/{id}/edit', [Controller::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [Controller::class, 'update'])->name('update');
Route::delete('/delete/{id}',[Controller::class,'delete'])->name('delete'); 
