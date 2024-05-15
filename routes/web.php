<?php

use App\Http\Controllers\Guests\PageController;
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
    return view('guests.home');
})->name('guests.home');

/* Route::get('/items', [PageController::class, 'index'])->name('guests.items.index');

Route::get('/items/{item}', [PageController::class, 'show'])->name('guests.items.show'); */

Route::resource('/items', PageController::class);
