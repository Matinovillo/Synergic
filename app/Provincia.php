<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public $table = 'provincias';
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';
}
