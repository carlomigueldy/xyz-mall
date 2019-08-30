<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'Lorem ipsum dollum',
            'quantity' => 250,
            'price' => 19875.95,
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Lorem ipsum dollum',
            'quantity' => 500,
            'price' => 8999.95,
        ]);

        Product::create([
            'name' => 'Clothing Bundle',
            'description' => 'Lorem ipsum dollum',
            'quantity' => 300,
            'price' => 1499.75,
        ]);
    }
}
