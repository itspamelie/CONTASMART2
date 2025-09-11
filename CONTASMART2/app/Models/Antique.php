<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antique extends Model
{
    protected $table = "antiques";
    //Campos de la tabla
    protected $fillable = [
        'dias_vacaciones',
        'prima_vacacional',
        'dias_aguinaldo',
        'factor'
    ];

}
