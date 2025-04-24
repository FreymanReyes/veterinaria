<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sexos extends Model
{

    
    public function clientesexo()
    {
        return $this->hasMany('App\clientes');
    }
    
    public function mascotasexo()
    {
        return $this->hasMany('App\mascotas');
    }
    
}
