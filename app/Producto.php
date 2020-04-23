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
    
    public function usuario(){
        return $this->belongsToMany('App\User','favoritos_users','id_producto','id_usuario');
    }

    public function detalleVenta(){
        return $this->hasMany('App\Detalle_venta','id_producto');
    }

    public function scopeBuscar($query,$tipo,$buscar){
        if($tipo && $buscar){
            return $query->where($tipo,'like',"%$buscar%");
        }
    }
}
