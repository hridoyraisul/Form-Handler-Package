<?php
use Illuminate\Support\Facades\Route;
use RaisulHridoy\FormHandler\Http\Controllers\FormController;

Route::get('/form', [FormController::class,'create']);
Route::post('/form', [FormController::class,'store'])->name('form.store');
