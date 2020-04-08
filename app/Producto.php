<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Categoria;
class Producto extends Model
{
    public $table = "productos";
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';



    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria');
    }

    public function fotos()
    {
        return $this->hasMany('App\Producto_foto','id_producto');
    }
    
    public function favoritos()
    {
        return $this->hasMany('App\Favoritos','id_producto');
    }
}
