<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
    public $table = 'productos_favoritos';
    public $timestamps = true;
    public $guarded = [];
    public $primaryKey = 'id';


    public function producto()
    {
        return $this->belongsTo('App\Producto','id_producto');
    }
}
