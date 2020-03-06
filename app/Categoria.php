<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = 'categorias';
    public $timestamps = false;
    public $primaryKey = 'id';
    public $guarded = [];

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'id');
    }

    public function subcategorias() {
        return $this->hasMany(Categoria::class, 'id_categoria_padre');
    }

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
