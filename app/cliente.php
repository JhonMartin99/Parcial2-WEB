<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'id_cliente',
        'dpi',
        'nombre',
        'apellido',
        'email',
        'tel',
        'direccion'
    ];

    protected $primaryKey = 'id_cliente';
}
