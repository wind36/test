<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 10; $i++) { 
            \DB::table('products')->insert([
                'name' => 'Продукт арт.'.$i,
                'description' => 'Описание продукта артикул'.$i,
            ]);
        }

    }
}
