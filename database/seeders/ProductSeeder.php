<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
        'title' => "Product 1",
        'category' => "Yellow",
        'description' => "Product 1 description",
        'price' => 100,
        ]);
        DB::table('products')->insert(
        [
        'title' => "Product 2",
        'category' => "Blue",
        'description' => "Product 2 description",
        'price' => 200,
        ]);
        DB::table('products')->insert(
        [
        'title' => "Product 3",
        'category' => "Pink",
        'description' => "Product 3 description",
        'price' => 400,
        ]);
        DB::table('products')->insert(
        [
        'title' => "Product 4",
        'category' => "Green",
        'description' => "Product 4 description",
        'price' => 500,
        ]);

    }
}