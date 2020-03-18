<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{   

    public $table = 'domicilios';
    public $timestamps = false;
    public $guarded = [];
    public $primaryKey = 'id';

    public function user()
    {
        return $this->hasOne('App\User','id_domicilio');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'id_provincia');
    }

}
