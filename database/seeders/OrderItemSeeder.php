<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\OrderItem::factory()->count(100)->make()->each(function($item){
            $item->order_id = \App\Models\Order::inRandomOrder()->first()->id;
            $item->product_id = \App\Models\Product::inRandomOrder()->first()->id;
            $item->save();
        });
    }
}
