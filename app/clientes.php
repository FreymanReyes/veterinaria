<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
        'nombre', 'documento', 'id_sexo', 'direccion','telefono','correo',
    ];

    public function sexocliente()
    {
      return $this->belongsTo('App\sexos','id_sexo','id');
    }
    public function mascotacliente()
    {
      return $this->belongsTo('App\mascotas','id_cliente','id');
    }
}
