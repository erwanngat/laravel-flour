<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Flour::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $u = new User();
        $u->name = "test";
        $u->email = "test@example.com";
        $u->password = hash::make("test");
        $u->save();

        $u = new User();
        $u->name = "erwann";
        $u->email = "erwann@test.com";
        $u->password = hash::make("erwann");
        $u->save();

        $this->call([
            FlourSeeder::class,
        ]);
    }
}
