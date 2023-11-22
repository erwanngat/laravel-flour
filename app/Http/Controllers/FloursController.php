<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flour;
use App\Models\User;
use Carbon\Carbon;

class FloursController extends Controller
{

    public function index()
    {
        // dd(auth()->user());
        $flours = Flour::all();
        if(auth()->user()){
            return view('flours.index', compact('flours'));
        }else{
            return view('indexUser', compact('flours'));
        }
    }

    public function create()
    {
        return view('flours.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|min:2|max:20|regex:/^[A-Z][a-z]+$/',
            'price' => 'required|decimal:0,2|max:99999',
            'type' => 'required|max:50',
            'mineral_content' => 'required|decimal:0,2|max:100',
            'expiry_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096'
        ]);

        $imageName = request()->file('image')->getClientOriginalName();
        $existingImage = Flour::where('image', $imageName)->exists();
        if ($existingImage) {
            $imageName = time() . '_' . $imageName;
        }
        request()->file('image')->move(public_path('images'), $imageName);

        $owner = User::where('name', request()->owner)->first();
        if ($owner) {
            $owner_id = $owner->id;
        } else {
            $owner_id = 0;
        }

        $f = new Flour();
        $f->name = request()->name;
        $f->price = request()->price;
        $f->type = request()->type;
        $f->mineral_content = request()->mineral_content;
        $f->expiry_date = request()->expiry_date;
        $f->user_id = $owner_id;
        $f->image = $imageName;
        $f->save();
        return  redirect('/flours/' . $f->id);
    }

    public function show(Flour $flour)
    {
        $expiryDate = Carbon::parse($flour->expiry_date);
        $dateDifference = $expiryDate->diffForHumans();
        return view('flours.show', ['flour' => $flour, 'dateDifference' => $dateDifference]);
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
            'expiry_date' => 'required|date',
            'owner' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096'
        ]);

        if (request()->hasFile('image')) {
            $imageName = request()->file('image')->getClientOriginalName();
            $existingImage = Flour::where('image', $imageName)->exists();
            if ($existingImage) {
                $imageName = time() . '_' . $imageName;
            }
            request()->file('image')->move(public_path('images'), $imageName);
            $flour->image = $imageName;
        }

        $owner = User::where('name', request()->owner)->first();
        if ($owner) {
            $owner_id = $owner->id;
        } else {
            $owner_id = 0;
        }

        $flour->name = request()->name;
        $flour->price = request()->price;
        $flour->type = request()->type;
        $flour->mineral_content = request()->mineral_content;
        $flour->expiry_date = request()->expiry_date;
        $flour->user_id = $owner_id;
        $flour->save();
        return redirect('/flours/' . $flour->id);
    }

    public function destroy(Flour $flour)
    {
        $flour->delete();
        return redirect('/flours');
    }
}
