<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Address::factory()->count(100)->make()->each(function($address){
            $address->order_id = \App\Models\Order::inRandomOrder()->first()->id;
            $address->save();
        });
    }
}
