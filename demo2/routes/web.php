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
//    return view('welcome');
//});
Route::prefix('staffs-manage')->group(function (){
    Route::get('/index', [\App\Http\Controllers\StaffController::class, 'index'])->name('staffs.index');
    Route::get('/staff/create', [\App\Http\Controllers\StaffController::class, 'create'])->name('staffs.create');
    Route::post('/staff/create', [\App\Http\Controllers\StaffController::class, 'store'])->name('staffs.store');
    Route::get('/staff/{staff}/edit', [\App\Http\Controllers\StaffController::class, 'edit'])->name('staffs.edit');
    Route::put('/staff/{staff}/edit', [\App\Http\Controllers\StaffController::class, 'update'])->name('staffs.update');
    Route::delete('/staff/{staff}', [\App\Http\Controllers\StaffController::class, 'destroy'])->name('staffs.destroy');
});
