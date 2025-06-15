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
        \App\Models\Product::factory()->count(50)->make()->each(function ($product) {
            $product->category()->associate(\App\Models\Category::inRandomOrder()->first());
            $product->brand()->associate(\App\Models\Brand::inRandomOrder()->first());
            $product->save();

            $product->images()->createMany(
                \App\Models\Image::factory()->count(rand(1, 5))->make()->toArray()
            );
        });
    }
}
