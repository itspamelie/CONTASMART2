<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = "years";
    protected $primaryKey = "id";
    //Campos de la tabla
    protected $fillable = [
        'year',
        'sm',
        'umi',
        'uma',
    ];
}
