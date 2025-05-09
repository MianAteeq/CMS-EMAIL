<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DatabaseSeeder;

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
        $this->call([
            // UserSeeder::class,
            // // AdminSeeder::class,
            PermissionSeeder::class,
            // ColorSeeder::class,
            // EngineSizeSeeder::class,
            // FuelTypeSeeder::class,
            // TransMissionTypeSeeder::class,
            // MakeSeeder::class,
            // JobTypeSeeder::class,
            // ServiceSeeder::class,
            // ModelSeeder::class,
        ]);
    }
}
