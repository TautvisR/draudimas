<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/owners', [\App\Http\Controllers\OwnersController::class, 'owners'])->name("owners.list");
Route::get('/owner/new',[\App\Http\Controllers\OwnersController::class, 'new'])->name("owners.new");
Route::post('/owners.setnew', [\App\Http\Controllers\OwnersController::class, 'setnew'])->name("owners.setnew");
Route::get('/owners/{id}/update', [\App\Http\Controllers\OwnersController::class, 'update'])->name("owners.update");
Route::post('/owners/{id}/save', [\App\Http\Controllers\OwnersController::class, 'save'])->name('owners.save');
Route::get('/owners/{id}/delete',[\App\Http\Controllers\OwnersController::class, 'delete'])->name("owners.delete");
