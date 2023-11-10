<?php

use App\Models\Flour;
use App\Http\Controllers\FloursController;
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


Route::get('/flours', [FloursController::class, 'index']);
Route::get('/flours/create', [FloursController::class, 'create']);
Route::post('/flours', [FloursController::class, 'store']);
Route::get('/flours/{flour}/edit', [FloursController::class, 'edit']);
Route::patch('/flours/{flour}', [FloursController::class, 'update']);
Route::delete('/flours/{flour}', [FloursController::class, 'destroy']);
Route::get('/flours/{flour}', [FloursController::class, 'show']  );

Route::get('/', function () {
    return redirect('/flours');
});
