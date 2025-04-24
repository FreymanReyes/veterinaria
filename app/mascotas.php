<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mascotas extends Model
{
  protected $fillable = [
    'nombre', 'edad', 'id_sexo', 'id_raza','id_tipos_edades',
];

    public function sexomascota()
    {
      return $this->belongsTo('App\sexos','id_sexo','id');
    }
    public function tipo_edadmascota()
    {
      return $this->belongsTo('App\tipos_edad','id_tipos_edades','id');
    }
    public function clientemascota()
    {
      return $this->belongsTo('App\clientes','id_cliente','id');
    }
    public function razamascota()
    {
      return $this->belongsTo('App\razas','id_raza','id');
    }
}
