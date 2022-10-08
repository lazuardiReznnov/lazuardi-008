<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => 3,
            'merk_id' => 1,
            'name' => 'Oppo A57',
            'slug' => 'Oppo-A57',
            'descriptions' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae tempore voluptate, perspiciatis sapiente voluptates, voluptas itaque possimus assumenda veniam vitae alias molestias excepturi',
            'dp' => 300000,
            'three' => 3000000,
            'six' => 3300000,
            'week' => 3400000,
        ]);
        Product::create([
            'category_id' => 3,
            'merk_id' => 4,
            'name' => 'Samsung M12',
            'slug' => 'samsung-M12',
            'descriptions' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae tempore voluptate, perspiciatis sapiente voluptates, voluptas itaque possimus assumenda veniam vitae alias molestias excepturi',
            'dp' => 300000,
            'three' => 3000000,
            'six' => 3300000,
            'week' => 300000,
        ]);
    }
}