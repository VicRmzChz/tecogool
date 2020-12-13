<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteListaController;
use App\Http\Controllers\ClienteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/home');
});

/*Route::get('/lista', function () {
  return view('/pages/lista');
});
*/
//Route::get('/lista', [ClienteListaController::class, 'mostrarLista']);
//Route::get('/lista', [ClienteListaController::class, 'show']);
//Route::resource('/lista', ClienteController::class)->only(['index']);
Route::resource('/lista', ClienteController::class)->only(['index', 'show']);
//Route::get('/lista', [ClienteController::class, 'index']);
//Route::get('/lista/{buscarNombre}', [ClienteController::class, 'show']);