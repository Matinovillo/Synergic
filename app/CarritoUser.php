<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class CarritoUser extends Model
{
    public $table = 'carrito_users';
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';

    /*public function user()
    {
        return $this->hasOne('App\User','id_usuario');
    }*/
}
