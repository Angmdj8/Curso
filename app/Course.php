<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =[
    // especificar cambios a llenar la base de datos
    'code',
    'name',
    'description',
    'url',
    'duration',
    'start',
    'end'

    ];
}
