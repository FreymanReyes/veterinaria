<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $fillable = [
        'nombre', 'precio', 'id_proveedor',
    ];

    public function proveedorservicio()
    {
      return $this->belongsTo('App\proveedores','id_proveedor','id');
    }
}
