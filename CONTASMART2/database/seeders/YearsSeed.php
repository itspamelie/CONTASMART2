<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //importar la base de datos 


class YearsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('years')->insert([  
            ['year'=>2016, 'sm'=>73.04,'uma'=>73.04, 'umi'=>73.04],
            ['year'=>2017, 'sm'=>80.04,'uma'=>75.79, 'umi'=>75.49],
            ['year'=>2018, 'sm'=>88.36,'uma'=>80.6, 'umi'=>78.43],
            ['year'=>2019, 'sm'=>102.68,'uma'=>84.49, 'umi'=>82.22],
            ['year'=>2020, 'sm'=>123.22,'uma'=>86.88, 'umi'=>84.55],
            ['year'=>2021, 'sm'=>141.7,'uma'=>89.62, 'umi'=>87.21],
            ['year'=>2022, 'sm'=>172.87,'uma'=>96.22, 'umi'=>91.56],
            ['year'=>2023, 'sm'=>207.44,'uma'=>103.74, 'umi'=>96.32],
            ['year'=>2024, 'sm'=>248.93,'uma'=>108.57, 'umi'=>100.81],
            ['year'=>2025, 'sm'=>278.8,'uma'=>113.14, 'umi'=>100.81],
            ]);
    }
}
