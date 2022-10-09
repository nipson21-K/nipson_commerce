<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->INSERT([
            'name'=>'Nipson',
            'email'=>'nipsan007@gmail.com',
            'password'=>'nevergiveup'
        ]);
    }
}