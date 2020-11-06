<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
 //   return view('welcome');
//});


Route::resource('productos', ProductosController::class);
Route::view('/','Index')->name('Index');
Route::view('/Politicas','Politicas')->name('Politicas');
Route::view('/Ubicaciones','Ubicaciones')->name('Ubicaciones');

