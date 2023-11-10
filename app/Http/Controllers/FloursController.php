<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flour;

class FloursController extends Controller
{
    public function index()
    {
        $flours = Flour::all();
        return view('flours.index', compact('flours'));
    }

    public function create()
    {
        return view('flours.create');
    }

    public function store()
    {
        // valider les données
        request()->validate([
            'name' => 'required|min:2|max:20|regex:/^[A-Z][a-z]+$/',
            'price' => 'required|decimal:0,2|max:99999',
            'type' => 'required|max:50',
            'mineral_content' => 'required|decimal:0,2|max:100',
            'expiry_date' => 'required|date'
        ]);

        $f = new Flour();
        $f->name = request()->name;
        $f->price = request()->price;
        $f->type = request()->type;
        $f->mineral_content = request()->mineral_content;
        $f->expiry_date = request()->expiry_date;
        $f->save();
        return  redirect('/flours/' . $f->id);
    }

    public function show(Flour $flour)
    {
        return view('flours.show', compact('flour'));
    }

    public function edit(Flour $flour)
    {
        return view('flours.edit', compact('flour'));
    }

    public function update(Flour $flour)
    {
        request()->validate([
            'name' => 'required|min:2|max:20',
            'price' => 'required|decimal:0,2|max:99999',
            'type' => 'required|max:50',
            'mineral_content' => 'required|decimal:0,2|max:100',
            'expiry_date' => 'required|date'
        ]);

        $flour->name = request()->name;
        $flour->price = request()->price;
        $flour->type = request()->type;
        $flour->mineral_content = request()->mineral_content;
        $flour->expiry_date = request()->expiry_date;
        $flour->save();
        return redirect('/flours/' . $flour->id);
    }

    public function destroy(Flour $flour){
        $flour->delete();
        return redirect('/flours');
    }
}
