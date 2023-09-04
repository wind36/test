<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $products = Product::all();

        foreach($products as $product){
            \DB::table('prices')->insert([
                'product_id' => $product->id,
                'domain' => 'msk',
                'price' => '111.00'
            ]);
            \DB::table('prices')->insert([
                'product_id' => $product->id,
                'domain' => 'spb',
                'price' => '222.00'
            ]);
            \DB::table('prices')->insert([
                'product_id' => $product->id,
                'domain' => 'kzn',
                'price' => '333.00'
            ]);
        }

    }
}