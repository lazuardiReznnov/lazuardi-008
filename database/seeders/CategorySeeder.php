<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Home Apliance',
            'descriptions' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae tempore voluptate,',
        ]);
        Category::create([
            'name' => 'Television',
            'descriptions' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae tempore voluptate,',
        ]);
        Category::create([
            'name' => 'Smartphone',
            'descriptions' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae tempore voluptate,',
        ]);
    }
}
