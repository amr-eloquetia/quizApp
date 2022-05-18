<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'General Knowledge'
        ]);
        Category::create([
            'name' => 'Science'
        ]);
        Category::create([
            'name' => 'Sports'
        ]);
        Category::create([
            'name' => 'Music'
        ]);

    }
}