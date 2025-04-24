<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_edad extends Model
{
    public function mascotatipo_edad()
    {
        return $this->hasMany('App\mascotas');
    }
}
