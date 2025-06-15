<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Brand::factory()->count(10)->create()->each(function ($brand) {
            $brand->image()->create([
                'image' => 'https://picsum.photos/seed/' . $brand->id . '/300/200',
            ]);
        });
    }
}
