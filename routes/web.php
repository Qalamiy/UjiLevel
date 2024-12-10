<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSayaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});
// untuk myproducts
Route::get('/myproducts',[ProductSayaController::class,'index'])->name('ke-productSaya');
// untuk product
Route::get('/dataproducts',[ProductController::class,'index'])->name('ke-dataProducts');
route::get('products/tambah',[ProductController::class,'tambah'])->name('ke-tambah_products');
route::POST('products/aksi_tambah',[ProductController::class,'aksi_tambah'])->name('ke-product_aksi_tambah');
// untuk cateegories
Route::get('/categories',[CategoryController::class,'index'])->name('ke-categories');
