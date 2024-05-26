<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $demodata=[
        [
            'name' => 'apple',
            'price' => 100,
            'status' => 1,
            'description' =>'test product' ,
        ],
        [
            'name' => 'banana',
            'price' => 50,
            'status' => 1,
            'description' =>'test product' ,
        ],
        [
            'name' => 'graps',
            'price' => 40,
            'status' => 1,
            'description' =>'test product' ,
        ],
        [
            'name' => 'pommagranite',
            'price' => 80,
            'status' => 1,
            'description' =>'test product' ,
        ],
        [
            'name' => 'carrot',
            'price' => 40,
            'status' => 1,
            'description' =>'test product' ,
        ]
    ];

        DB::table('products')->insert($demodata);
    }
}
