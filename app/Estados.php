<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    public function estadoVenta()
    {
        return $this->hasMany('App\Ventas','id_estado');
    }
}
