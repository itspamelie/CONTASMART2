<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //importar la base de datos 


class AntiquesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('antiques')->insert([
        ['dias_vacaciones'=>12, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0493],
        ['dias_vacaciones'=>14, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0507],
        ['dias_vacaciones'=>16, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0521],
        ['dias_vacaciones'=>18, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0534],
        ['dias_vacaciones'=>20, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0548],
        ['dias_vacaciones'=>22, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0562],
        ['dias_vacaciones'=>22, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0562],
        ['dias_vacaciones'=>22, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0562],
        ['dias_vacaciones'=>22, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0562],
        ['dias_vacaciones'=>22, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0562],
        ['dias_vacaciones'=>24, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0575],
        ['dias_vacaciones'=>24, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0575],
        ['dias_vacaciones'=>24, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0575],
        ['dias_vacaciones'=>24, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0575],
        ['dias_vacaciones'=>24, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0575],
        ['dias_vacaciones'=>26, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0589],
        ['dias_vacaciones'=>26, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0589],
        ['dias_vacaciones'=>26, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0589],
        ['dias_vacaciones'=>26, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0589],
        ['dias_vacaciones'=>26, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0589],
        ['dias_vacaciones'=>28, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0603],
        ['dias_vacaciones'=>28, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0603],
        ['dias_vacaciones'=>28, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0603],
        ['dias_vacaciones'=>28, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0603],
        ['dias_vacaciones'=>28, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0603],
        ['dias_vacaciones'=>30, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0616],
        ['dias_vacaciones'=>30, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0616],
        ['dias_vacaciones'=>30, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0616],
        ['dias_vacaciones'=>30, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0616],
        ['dias_vacaciones'=>30, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0616],
        ['dias_vacaciones'=>32, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0630],
        ['dias_vacaciones'=>32, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0630],
        ['dias_vacaciones'=>32, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0630],
        ['dias_vacaciones'=>32, 'prima_vacacional'=>25,'dias_aguinaldo'=>15, 'factor'=>1.0630]
        ]);
    }
}
