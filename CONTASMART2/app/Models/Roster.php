<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $table = "rosters";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'fondoahorro',
        'salario',
        'tipo_sueldo',
        'diastrabajadosaguinaldo',
        'horasextrasdoubles',
        'horasextrastriples',
        'cantidadfestivos',
        'antiguedad',
        'id_practica'
    ];
}
