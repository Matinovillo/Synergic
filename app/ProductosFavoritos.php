<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Producto;
use App\User;

class ProductosFavoritos extends Model
{
    public $table = "productos_favoritos";
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';

}
