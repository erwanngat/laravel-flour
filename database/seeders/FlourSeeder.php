<?php

namespace Database\Seeders;

use App\Models\Flour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f = new Flour();
        $f->name = "Wheat";
        $f->price = 8.5;
        $f->type = "Eating";
        $f->mineral_content = 0.6;
        $f->expiry_date = "2023-12-05";
        if($f->name == "Wheat"){$f->image = "wheat.png";}
        $f->save();

        $f = new Flour();
        $f->name = "Almond";
        $f->price = 11.5;
        $f->type = "Eating";
        $f->mineral_content = 0.4;
        $f->expiry_date = "2024-12-07";
        if($f->name == "Almond"){$f->image = "almond.png";}

        $f->save();

        $f = new Flour();
        $f->name = "Beans";
        $f->price = 15.0;
        $f->type = "Eating";
        $f->mineral_content = 0.9;
        $f->expiry_date = "2023-11-28";
        if($f->name == "Beans"){$f->image = "beans.png";}
        $f->save();

        $f = new Flour();
        $f->name = "Hemp";
        $f->price = 72.0;
        $f->type = "Consumption";
        $f->mineral_content = 0;
        $f->expiry_date = "2025-01-01";
        if($f->name == "Hemp"){$f->image = "hemp.png";}
        $f->save();

        $f = new Flour();
        $f->name = "Rice";
        $f->price = 2.99;
        $f->type = "Eating";
        $f->mineral_content = 0.5;
        $f->expiry_date = "2026-06-15";
        if($f->name == "Rice"){$f->image = "rice.png";}
        $f->save();
    }
}
