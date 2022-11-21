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
//Tao route group
Route::prefix('/classrooms-manage')->group(function(){
    Route::get('/classrooms', [\App\Http\Controllers\ClassroomsController::class, 'index'])->name('classrooms.index');
    Route::get('/classrooms/create', [\App\Http\Controllers\ClassroomsController::class, 'create'])->name('classrooms.create');
    Route::post('/classrooms/create', [\App\Http\Controllers\ClassroomsController::class, 'store'])->name('classrooms.store');
    Route::get('/classrooms/{classrooms}/edit', [\App\Http\Controllers\ClassroomsController::class, 'edit'])->name('classrooms.edit');
    Route::put('/classrooms/{classrooms}/edit', [\App\Http\Controllers\ClassroomsController::class, 'update'])->name('classrooms.update');
    Route::delete('/classrooms/{classrooms}', [\App\Http\Controllers\ClassroomsController::class, 'destroy'])->name('classrooms.destroy');
});

Route::prefix('/student-manage')->group(function(){
    Route::get('/students', [\App\Http\Controllers\StudentsController::class, 'index'])->name('students.index');
    Route::get('students/create', [\App\Http\Controllers\StudentsController::class, 'create'])->name('students.create');
    Route::post('students/create', [\App\Http\Controllers\StudentsController::class, 'store'])->name('students.store');
    Route::get('/students/{students}/edit', [\App\Http\Controllers\StudentsController::class, 'edit'])->name('students.edit');
    Route::put('/students/{students}/edit', [\App\Http\Controllers\StudentsController::class, 'update'])->name('students.update');
    Route::delete('/students/{students}', [\App\Http\Controllers\StudentsController::class, 'destroy'])->name('students.destroy');
});
