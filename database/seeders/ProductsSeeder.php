<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->INSERT([
            [
            'name'=>'Gibson Les Paul',
            'description'=>'The iconic Les Paul of 1990',
            'category'=>'guitar',
            'price'=>'1000$',
            'gallery'=>'https://picsum.photos/200'
            ],
            [
                'name'=>'Fender',
            'description'=>'The iconic fender of 1990',
            'category'=>'guitar',
            'price'=>'100$',
            'gallery'=>'https://picsum.photos/200'
            ],
            [
                'name'=>'Ibanez',
            'description'=>'The iconic ibanez of 1990',
            'category'=>'guitar',
            'price'=>'1020$',
            'gallery'=>'https://picsum.photos/200'
            ]
            
        ]);
    }
}