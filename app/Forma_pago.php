<?php

namespace App;
use App\Ventas;

use Illuminate\Database\Eloquent\Model;

class Forma_pago extends Model
{
    public $table = "formas_pagos";
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';


    public function formaPagoVenta()
    {
        return $this->hasMany('App\Ventas','id_forma_pago');
    }

    
}
