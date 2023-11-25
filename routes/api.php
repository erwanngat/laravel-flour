<?php

use App\Models\User;
use App\Models\Flour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FlourController;

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

Route::get('/flours', [FlourController::class, 'index']);
Route::get('flours/{flour}', [FlourController::class,'show']);
Route::post('flours', [FlourController::class, 'store']);
Route::patch('flours/{flour}', [FlourController::class, 'update']);
Route::delete('flours/{flour}', [FlourController::class,'destroy']);
