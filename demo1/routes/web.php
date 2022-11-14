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
Route::get('/index',[\App\Http\Controllers\indexControllers::class, 'index']);

//hien thi danh sach san pham
Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('products');
//Hien thi danh sach nhan vien
Route::get('/staffs',[\App\Http\Controllers\StaffsController::class, 'index'])->name('staffs.index');
//Hien thi form them
Route::get('/staffs/create', [\App\Http\Controllers\StaffsController::class, 'create'])->name('staffs.create');
//Them du lieu len DB
Route::post('/staffs/create', [\App\Http\Controllers\StaffsController::class, 'store'])->name('staffs.store');
//Hien thi form sua
Route::get('/staffs/{staffs}/edit', [\App\Http\Controllers\StaffsController::class, 'edit'])->name('staffs.edit');
//Luu du lieu da sua len db
Route::put('/staffs/{staffs}/edit', [\App\Http\Controllers\StaffsController::class, 'update'])->name('staffs.update');
//Xoa du lieu
Route::delete('/staffs/{staffs}', [\App\Http\Controllers\StaffsController::class, 'destroy'])->name('staffs.destroy');
