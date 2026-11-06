<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'USB-C Hub',
            'description' => '7-in-1 USB-C Hub',
            'price' => 29.99,
            'stock' => 100,
            'is_active' => true,
        ]);

        DB::table('products')->insert([
            'name' => 'Wireless Mouse',
            'description' => 'Ergonomic 2.4GHz wireless mouse',
            'price' => 18.50,
            'stock' => 75,
            'is_active' => true,
        ]);
    }
}
