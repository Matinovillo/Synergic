<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    public $table = "detalles_ventas";
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';

    public function detalleProducto()
    {
        return $this->belongsTo('App\Producto','id_producto');
    }

    public function venta()
    {
        return $this->belongsTo('app\Ventas','id_venta');
    }
}
