<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "categorias";
    public $timestamps = false;
    public $primaryKey = "id";
    public $guarded = [];


    public function producto(){
        return $this->hasOne('App\Producto','id_categoria');
    }

    public function hijas(){
    return $this->hasMany('App\Categoria', 'id_categoria_padre');
    }

    public function padre(){
    return $this->belongsTo('App\Categoria', 'id_categoria_padre');
    }
}
