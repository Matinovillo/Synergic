<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    public $table = 'fotos';
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';


    public function users()
    {
        return $this->hasMany('User', 'id_foto');
    }

}


