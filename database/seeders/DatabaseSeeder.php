<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Concept;
use App\Models\User;
use App\Models\Vehicle;
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
        $this->call(RoleSeeder::class);



        User::create([
            'name' => 'Cliente Prueba',
            'email' => 'cliente@agenciavandu.com',
            'password' => Hash::make('password'),
        ])->assignRole('User');
        
        $this->call(UserSeeder::class);
        $this->call(BudgetSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(AvailabilitySeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(ConceptSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(SplitSeeder::class);
        $this->call(DiscountSeeder::class);
        $this->call(VoucherSeeder::class);
        $this->call(ItinerarySeeder::class);

        User::create([
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'dev@agenciavandu.com',
            'password' => Hash::make('marencos6359:D'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Alvar Buenfil',
            'email' => 'ab@agenciavandu.com',
            'password' => Hash::make('password'),
        ])->assignRole('Admin');

    }
}
