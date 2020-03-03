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
}
