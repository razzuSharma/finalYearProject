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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::post('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

//for user logout
Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

//for maps
Route::get('/maps', [App\Http\Controllers\MapController::class, 'index'])->name('maps.index');

//for Operator
Route::get('/operators/{$id}', [App\Http\Controllers\OperatorController::class, 'index'])->name('operators.index');
Route::get('/operators/add', [App\Http\Controllers\OperatorController::class, 'create'])->name('operators.add');
Route::post('/operators/save', [App\Http\Controllers\OperatorController::class, 'store'])->name('operators.store');

//for Bus
Route::get('/buses', [App\Http\Controllers\BusController::class, 'index'])->name('buses.index');
// Route::get('/buses/add', [App\Http\Controllers\BusController::class, 'create'])->name('buses.add');




//for Reports section
Route::get('/reports', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');