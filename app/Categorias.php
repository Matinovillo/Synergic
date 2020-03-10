<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public $table = 'categorias';
    public $timestamps = false;
    public $primaryKey = 'id';
    public $guarded = [];

    public function categorias(){
        return $this->belongsTo(Categorias::class, 'id');
    }

    public function subcategorias() {
        return $this->hasMany(Categorias::class, 'id_categoria_padre');
    }

}
