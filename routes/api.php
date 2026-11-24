<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LayananApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API Layanan
Route::get('/layanan', [LayananApiController::class, 'index']);
Route::get('/layanan/{id}', [LayananApiController::class, 'show']);