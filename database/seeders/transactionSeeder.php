<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'product_id' => mt_rand(1, 2),
            'customer_id' => 1,
            'inv' => Str::random(9),
            'date' => '2022/10/22',
            'tenor' => 3,
            'dp' => 300000,
            'jumlah' => 3000000,
        ]);

        Transaction::create([
            'product_id' => mt_rand(1, 2),
            'customer_id' => 1,
            'inv' => Str::random(9),
            'date' => '2022/10/11',
            'tenor' => 3,
            'dp' => 300000,
            'jumlah' => 4000000,
        ]);
    }
}
