<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DashboardAbout;
use App\Models\Fintech;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            DashboardAboutSeeder::class,
            CategorySeeder::class,
            MerkSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            CustomerSeeder::class,
            FinctechSeeder::class,
            transactionSeeder::class,
        ]);
    }
}
