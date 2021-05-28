<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Product::truncate();
        // Category::truncate();
        // \App\Models\User::factory(10)->create();
        // $category = Category::create([
        //     'category_name' => 'Mobile',
        //     'category_desc' => 'This is Mobile category'
        // ]);
        Category::factory(5)->create();
        Product::factory(5)->create();
        

        // Product::create([
        //     'product_name' => 'Iphone 12',
        //     'product_desc' => 'Most Waited Iphone 12 is on sale now',
        //     'price' => '120000',
        //     'category_id' => $category->id
        // ]);
    }
}
