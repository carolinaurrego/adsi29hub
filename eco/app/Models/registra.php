<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registra extends Model
{
    use HasFactory;
//para utilizar la tabla de registrar
    protected $table='usuarios';
//para que no me cree los campos de cuando se creo y se adiciono registro
    public $timestamps=false;
}


