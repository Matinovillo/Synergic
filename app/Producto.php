<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function addProductoCarrito(Request $form){
        $producto = new CarritoUser();
        $producto->id_producto = $form['add_cart'];
        $producto->id_usuario = auth()->user()->id;
        
        $producto->save();
    }
}
