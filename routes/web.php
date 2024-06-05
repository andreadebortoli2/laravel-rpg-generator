<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TypeController;
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


// Guests routes:
Route::get('/', function () {
    return view('auth.login');
})->name('guests.home');


// admin routes:
Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('/characters', CharacterController::class)->parameters(['characters' => 'character:slug']);
        Route::resource('/items', ItemController::class)->parameters(['items' => 'item:slug']);
        Route::resource('/types', TypeController::class)->parameters(['types' => 'type:slug']);
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
