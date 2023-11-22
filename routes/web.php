<?php

use App\Models\Flour;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FloursController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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


// Route::get('/flours', [FloursController::class, 'index']);
// Route::get('/flours/create', [FloursController::class, 'create'])->name('create');
// Route::post('/flours', [FloursController::class, 'store']);
// Route::get('/flours/{flour}/edit', [FloursController::class, 'edit']);
// Route::patch('/flours/{flour}', [FloursController::class, 'update']);
// Route::delete('/flours/{flour}', [FloursController::class, 'destroy']);
// Route::get('/flours/{flour}', [FloursController::class, 'show']);

Route::resource('/flours', FloursController::class);

Route::get('/', [FloursController::class, 'index'])->name('flours');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function () {
        return view('admin.admin-panel');
    })->name('administration')->middleware('is_admin');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/test-livewire', function(){
    return view('counterContainer');
});



