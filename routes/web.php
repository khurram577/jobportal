<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Accountcontroller;




Route::get('/',[homecontroller::class,'index'])->name('home');
Route::get('/account/register',[Accountcontroller::class,'registration'])->name('account.registration');
Route::post('/account/process-register',[Accountcontroller::class,'processRegistration'])->name('account.processregistration');


