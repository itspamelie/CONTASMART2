<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([  
            ['img'=>'1.webp'],
            ['img'=>'3.webp'],
            ['img'=>'4.webp'],
            ['img'=>'5.webp'],           
            ['img'=>'6.webp'],           
            ]);
    }
}
