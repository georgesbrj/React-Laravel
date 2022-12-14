<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/',function(){
   return User::all();
});

Route::post('/login',[AuthController::class],'login')->name('login');

Route::post('/logout',[AuthController::class],'logout')->name('logout');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


 
