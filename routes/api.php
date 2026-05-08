<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 1. Import Controller yang sudah dibuat
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

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

// Route bawaan Laravel 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 2. Daftarkan Route API untuk Categories dan Items
// apiResource akan otomatis membuat rute GET, POST, PUT, dan DELETE
Route::apiResource('categories', CategoryController::class);
Route::apiResource('items', ItemController::class);