<?php

use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\typeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('characters', [CharacterController::class, 'index']);
Route::get('characters/{character:slug}', [CharacterController::class, 'show']);

Route::get('items/{item:slug}', [ItemController::class, 'show']);
Route::get('types/{type:slug}', [TypeController::class, 'show']);
