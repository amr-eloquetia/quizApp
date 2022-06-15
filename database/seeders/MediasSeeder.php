<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medias')->insert([
            'product_id' => "1",
            'path' => "prize_images/1.jpg",
        ]);
        DB::table('medias')->insert([
            'product_id' => "2",
            'path' => "prize_images/2.jpg",
        ]);
        DB::table('medias')->insert([
            'product_id' => "3",
            'path' => "prize_images/3.jpg",
        ]);
        DB::table('medias')->insert([
            'product_id' => "4",
            'path' => "prize_images/4.jpg",
        ]);
    }
}