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
        $product = new Product();
        $product->name = 'Shirt';
        $product->price = '20000';
        $product->stock = '120';
        $product->save();

        $product = new Product();
        $product->name = 'T-Shirt';
        $product->price = '200';
        $product->stock = '120';
        $product->save();

        $product = new Product();
        $product->name = 'Women-Shirt';
        $product->price = '1200';
        $product->stock = '40';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop';
        $product->price = '5000';
        $product->stock = '20';
        $product->save();

        $product = new Product();
        $product->name = 'PC';
        $product->price = '30000';
        $product->stock = '200';
        $product->save();

        $product = new Product();
        $product->name = 'Mobile';
        $product->price = '30000';
        $product->stock = '100';
        $product->save();
    }
}
