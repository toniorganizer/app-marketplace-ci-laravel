<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\SuplierController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ApiController::class)->group(function (){
    Route::get('/data', 'getData');
    Route::post('/tambahData', 'tambahData');
});

Route::controller(SuplierController::class)->group(function (){
    Route::get('/dataSuplier', 'getData');
    Route::post('/tambahData', 'tambahData');
});

Route::controller(BarangController::class)->group(function (){
    Route::get('/dataBarang', 'getData');
    Route::get('/beliBarang/{id}', 'getBarang');
    Route::get('/detailBeli/{id}', 'detailPembelian');
    Route::get('/stock', 'stockBarang');
    Route::get('/editBarang/{id}', 'editBarang');
    Route::post('/updateBarang/{id}', 'updateBarang');
    Route::post('/hapusBarang/{id}', 'hapusBarang');
    Route::post('/checkoutBarang', 'checkoutBarang');
    Route::post('/tambahDataBarang', 'tambahDataBarang');
});

Route::controller(PembelianController::class)->group(function (){
    Route::get('/dataPembelian', 'getData');
    Route::post('/tambahData', 'tambahData');
});

Route::controller(AuthController::class)->group(function (){
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->middleware('auth:api');
    Route::get('/user', 'user')->middleware('auth:api');
});
