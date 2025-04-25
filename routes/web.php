<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Accountcontroller;
use Nette\Utils\Strings;

Route::get('/',[homecontroller::class,'index'])->name('home');
Route::get('/account/register',[Accountcontroller::class,'registration'])->name('account.registration');
Route::post('/account/process-register',[Accountcontroller::class,'processRegistration'])->name('account.processregistration');


Route::get('/test/{name?}', function (string $name) {
    if ($name) {
        return "<h1>". $name ."</h1>";
    }else{

        return "<h1>no test</h1>";
    }
})->where('name', '[a-zA-Z]+');