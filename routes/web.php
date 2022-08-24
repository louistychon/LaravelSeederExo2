<?php

use App\Http\Controllers\CompagniesController;
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

Route::controller(CompagniesController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/{id}/show', 'show');
    Route::post('/create', 'store');
    Route::post('/deleteall', 'destroy2');
    Route::delete('/{id}/delete', 'destroy');
    Route::put('/{id}/show/update', 'update');
});
