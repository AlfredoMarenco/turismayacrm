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
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'dev@agenciavandu.com',
            'password' => Hash::make('marencos6359:D'),
        ]);
        User::create([
            'name' => 'Alvar Buenfil',
            'email' => 'ab@agenciavandu.com',
            'password' => Hash::make('password'),
        ]);
    }
}
