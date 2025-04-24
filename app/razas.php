<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class razas extends Model
{
    public function mascotaraza()
    {
        return $this->hasMany('App\mascotas');
    }
}
