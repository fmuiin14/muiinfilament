<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'code' => 'BA001',
            'name' => 'Beras Pulen',
            'image' => 'beras.png',
            'price' => 12500,
            'stock' => 50
        ]);
        Product::create([
            'code' => 'AC002',
            'name' => 'Air Mineral',
            'image' => 'air.png',
            'price' => 5000,
            'stock' => 25
        ]);
    }
}
