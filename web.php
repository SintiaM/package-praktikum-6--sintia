<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MenuController;

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


Route::get('/formulir', [GuruController::class, 'formulir']);
Route::post('/formulir/proses', [GuruController::class, 'formulir_proses']);

Route::get('/menumasakan', function(){
    return view('menumasakan');
});

Route::get('/tabelmenumakanan', function(){
    return view('tabelmenumakanan');
});

Route::get('/menumakanan',[MenuController::class, 'menu_makanan_minuman']);


