<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\Supplier;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController    ;
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
Route::get('/supplier/ed', function () {
    return view('supplier.edit');
});
Route::controller(SupplierController::class)
    ->middleware('auth')
    ->group(function () {

Route::get('/supplier',[SupplierController::class,'index']);
Route::post('/simpan',[SupplierController::class,'simpan']);
Route::get('/supplier/hapus/{id}',[SupplierController::class,'hapus']);
Route::get('/supplier/edit/{id}',[SupplierController::class,'edit']);
Route::post('/supplier/edit/editsimpan',[SupplierController::class,'editsimpan']);

});
//Get, Post, Put, dll 
//Lokasi Routing
// Route::get('/gudang',[LokasiController::class,'index']);
// Route::get('/gudang/tambah',[LokasiController::class,'formTambah']);
// Route::post('/gudang/simpan',[LokasiController::class,'simpan']);
// Route::get('/gudang/edit/{id}',[LokasiController::class,'edit']);
// Route::post('/gudang/edit/editsimpan',[LokasiController::class,'editsimpan']);
// Route::get('/gudang/hapus/{id}',[LokasiController::class,'hapus']);
//Route login
Route::post('auth',[logincontroller::class,'authenticate']);


//login 
// Routes Auth 
Route::controller(AuthController::class)
    ->group(function () {
        Route::get('login', 'formLogin')->name('login');
        Route::post('auth', 'masuk');
        Route::get('logout', 'logout');
    });

