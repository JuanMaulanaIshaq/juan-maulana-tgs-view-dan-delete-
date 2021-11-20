<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoricontroller;
use App\Http\Controllers\customercontroller;
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
    return view('tabelkanan.data');
});

Route::get('/data', [categoricontroller::class , 'index']);
Route::delete('/delete/{id}', [categoricontroller::class , 'delete']);

Route::get('/customer', [customercontroller::class , 'index']);
Route::delete('/delete/{id}', [customercontroller::class , 'delete']);
