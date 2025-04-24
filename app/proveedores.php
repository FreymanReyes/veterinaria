<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $fillable = [
        'nombre', 'nit', 'direccion', 'telefono','tipo_proveedor',
    ];

    public function servicioproveedores()
    {
        return $this->hasMany('App\servicios');
    }
}
