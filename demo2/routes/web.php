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
    Route::get('/create', [\App\Http\Controllers\StaffController::class, 'create'])->name('staffs.create');
    Route::post('/create', [\App\Http\Controllers\StaffController::class, 'store'])->name('staffs.store');
});
