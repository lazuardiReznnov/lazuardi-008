<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Merk;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        merk::create([
            'name' => 'Oppo',
        ]);
        merk::create([
            'name' => 'Samsung',
        ]);
        merk::create([
            'name' => 'Realme',
        ]);
        merk::create([
            'name' => 'Nokia',
        ]);
    }
}
