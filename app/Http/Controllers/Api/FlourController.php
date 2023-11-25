<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Flour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FlourController extends Controller
{
    public function index(){
        return Flour::all();
    }

    public function show($flour){
        return Flour::find($flour);
    }

    public function store(){
        $validator = Validator::make(request()->all(), [
            'name' => 'required|min:2|max:20',
            'price' => 'required|decimal:0,2|max:99999',
            'type' => 'required|max:50',
            'mineral_content' => 'required|decimal:0,2|max:100',
            'expiry_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096'
        ]);

        if($validator->fails()){
            return $validator->messages();
        }

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
        return 'created';
    }

    public function update($flour){
        $validator = Validator::make(request()->all(), [
            'name' => 'required|min:2|max:20',
            'price' => 'required|decimal:0,2|max:99999',
            'type' => 'required|max:50',
            'mineral_content' => 'required|decimal:0,2|max:100',
            'expiry_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096'
        ]);

        if($validator->fails()){
            return $validator->messages();
        }
         
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
        return 'updated';
    }

    public function destroy($flour){
        $flour->delete();
        return 'destroyed';
    }
}
