<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
 

Route::get('/', function () {

    $users = User::all();
    return view('welcome',compact('users'));
});
