<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prizes')->insert([
            'name' => "Bronze Prize",
            "price" => "100",
            'prize1' => "Blue",
            'prize2' => "Purple",
            'prize3' => "Pink",
            'prize4' => "Green",
            'prize5' => "Turquoise",
            'prize6' => "Yellow",
            'prize7' => "Gray",
            'prize8' => "Red",
        ]);
        // DB::table('prizes')->insert([
        //     'name' => "Silver Prize",
        //     "price" => "200",
        //     'prize1' => 'Silver Prize',
        //     'prize2' => 'Silver Prize',
        //     'prize3' => 'Silver Prize',
        //     'prize4' => 'Silver Prize',
        //     'prize5' => 'Silver Prize',
        //     'prize6' => 'Silver Prize',
        //     'prize7' => 'Silver Prize',
        //     'prize8' => 'Silver Prize',
        // ]);
        // DB::table('prizes')->insert([
        //     'name' => "Golden Prize",
        //     "price" => "300",
        //     'prize1' => 'Golden Prize',
        //     'prize2' => 'Golden Prize',
        //     'prize3' => 'Golden Prize',
        //     'prize4' => 'Golden Prize',
        //     'prize5' => 'Golden Prize',
        //     'prize6' => 'Golden Prize',
        //     'prize7' => 'Golden Prize',
        //     'prize8' => 'Golden Prize',
        // ]);
        // DB::table('prizes')->insert([
        //     'name' => "Wheel1 Prize",
        //     "price" => "500",
        //     'prize1' => 'value 100',
        //     'prize2' => 'value 200',
        //     'prize3' => 'value 300',
        //     'prize4' => 'value 1000',
        //     'prize5' => 'value 2000',
        //     'prize6' => 'value 10000',
        //     'prize7' => 'value 20000',
        //     'prize8' => 'value 100000',
        // ]);

    }
}