<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forma_entrega extends Model
{
    public $table = "formas_entregas";
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';


    public function formaEntregaVenta()
    {
        return $this->hasMany('App\Ventas','id_forma_entrega');
    }
}
