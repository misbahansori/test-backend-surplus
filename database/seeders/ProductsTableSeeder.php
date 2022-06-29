<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
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
        Product::factory()
            ->times(100)
            ->has(Category::factory()->count(3))
            ->has(Image::factory()->count(5))
            ->create();
    }
}
