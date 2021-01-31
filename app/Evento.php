<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'fechainicial',
        'fechafinal',
        'horainicial',
        'horafinal',
        'duracion',
        'detail'
    ];
}