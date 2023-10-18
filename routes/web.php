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


$DATA = [
    ['id' =>0, 'name' => 'wheat', 'price' => 10],
    ['id' =>1, 'name' => 'whole wheat', 'price' => 12],
    ['id' =>2, 'name' => 'almond', 'price' => 16],
];


Route::get('/flours', function () {  //afficher tout (index)
    $flours = [
        ['id' =>0, 'name' => 'wheat flour', 'price' => 10],
        ['id' =>1, 'name' => 'whole wheat flour', 'price' => 12],
        ['id' =>2, 'name' => 'almond flour', 'price' => 16],
    ];

    return view('flours.index', compact('flours'));
});

Route::get('/flours/create', function () {  //formulaire create
    return view('flours.create');
});

Route::post('/flours', function () {  //persister les infos
    dd('Post flour');
    // return view('store');
});

Route::get('/flours/edit', function () {  // formulaire edits
    return view('edit');
});

Route::patch('/flours/', function () {  //persister les edits
    return view('update');
});

Route::delete('/flours/', function () {  //supprimer 1
    return view('destroy');
});

Route::get('/flours/{id}', function ($id) {  // afficher 1 (show)
    $flours = [
        ['id' =>0, 'name' => 'wheat flour', 'price' => 10],
        ['id' =>1, 'name' => 'whole wheat flour', 'price' => 12],
        ['id' =>2, 'name' => 'almond flour', 'price' => 16],
    ];
    $flour = $flours[$id];
    return view('flours.show', compact('flour'));
});