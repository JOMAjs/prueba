<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable =[
        'id',
        'nombre',
        'fecha_inicio',
        'fecha_fin'
    ];

}
