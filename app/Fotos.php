<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Fotos extends Model
{
    public $table = 'fotos';
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';


    public function user()
    {
        return $this->hasOne('App\User','id_foto');
    }

}


