<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteListaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserAuth;


Route::get('/', function () {
    return view('pages/home');
});

Route::resource('/lista', ClienteController::class)->only(['index', 'show']);

Route::post('user', [UserAuth::class, 'userLogin']);
Route::get('dashboard', [UserAuth::class, 'board']);
Route::get('login', [UserAuth::class, 'userIsLogin']);


Route::get('logout', [UserAuth::class, 'userIsLogout']);