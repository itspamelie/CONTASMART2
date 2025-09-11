<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";
    protected $primaryKey = "id";
    //Campos de la tabla
    protected $fillable = [
        'img'
    ];
}
