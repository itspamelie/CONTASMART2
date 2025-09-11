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
            ['year'=>2019, 'sm'=>176.72,'uma'=>84.49, 'umi'=>82.22],
            ['year'=>2020, 'sm'=>185.56,'uma'=>86.88, 'umi'=>85.44],
            ['year'=>2021, 'sm'=>213.39,'uma'=>89.62, 'umi'=>87.21],
            ['year'=>2022, 'sm'=>260.34,'uma'=>96.22, 'umi'=>91.56],
            ['year'=>2023, 'sm'=>312.41,'uma'=>96.22, 'umi'=>91.56],
            ['year'=>2024, 'sm'=>374.89,'uma'=>108.57, 'umi'=>100.81],
            ['year'=>2025, 'sm'=>419.88,'uma'=>113.14, 'umi'=>100.81],
            ]);
    }
}
