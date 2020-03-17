<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_foto extends Model
{
    public $table = 'productos_fotos';
    public $primaryKey = 'id';
    public $guarded = [];

    public function producto()
    {
        return $this->belongsTo('App\Producto','id_producto');
    }

}
