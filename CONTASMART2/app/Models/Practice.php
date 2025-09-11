<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $table = "practices";
    protected $primaryKey = "id";
    //Campos de la tabla
    protected $fillable = [
        'titulo',
        'user_id', //llave foranea
        'year_id' //llave foranea
    ];
}
