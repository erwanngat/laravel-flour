<?php

use App\Models\Flour;
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


Route::get('/flours', function () {  //afficher tout (index)
    $flours = Flour::all();
    return view('flours.index', compact('flours'));
});

Route::get('/flours/create', function () {  //formulaire create
    return view('flours.create');
});

Route::post('/flours', function () {  //persister les infos
    $f = new Flour();
    $f->name = request()->name;
    $f->price = request()->price;
    $f->type = request()->type;
    $f->mineral_content = request()->mineral_content;
    $f->expiry_date = request()->expiry_date;
    $f->save();
    return  redirect('/flours/'.$f->id);
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
    $flour = Flour::find($id);
    return view('flours.show', compact('flour'));
});

Route::get('/', function () {  
    return redirect('/flours');
});