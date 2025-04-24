<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'codigo','nombre', 'descripcion', 'precio', 'tipo_producto',
    ];
}
