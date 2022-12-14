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

Route::get('/', function () {
    return view('welcome');
});
Route::get('produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('produk/hapus/{id}', [App\Http\Controllers\ProdukController::class, 'hapus'] );
Route::post('produk/tambah', [App\Http\Controllers\ProdukController::class, 'tambah'] )->name('tambah.produk');
