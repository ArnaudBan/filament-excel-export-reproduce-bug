<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for($i = 0; $i< 50; $i++){
            $city = City::factory()->create();

            User::factory(10)
                ->for($city)
                ->create();
        }


        User::factory()
            ->for($city)
            ->create([
                'name' => 'Admin',
                'email' => 'test@example.com',
            ]);
    }
}
