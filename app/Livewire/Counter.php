<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\Flour;

class Counter extends Component
{
    public string $username;
    public int $count;
    public Collection $flours;
    public string $name;
    public int $price;

    public function mount(){
        $this->username = 'test';
        $this->count = 0;
        $this->flours = Flour::all()->sortByDesc('id');
    }

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function add(){
        $f = new Flour();
        $f->name = $this->name;
        $f->price = $this->price;
        $f->type = 'eating';
        $f->mineral_content = '0.5';
        $f->expiry_date = '2030-01-01';
        $f->image = 'coconut.png';
        $f->user_id = '2';
        $f->save();
        $this->flours = Flour::all()->sortByDesc('id');
        // $this->flours->add($f);
    }

    public function render()
    {
        return view('livewire.counter');

    }
}
