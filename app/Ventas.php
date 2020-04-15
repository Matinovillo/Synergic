<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{

    public $table = "ventas";
    public $timestamps = true;
    public $guarded = [];
    public $primaryKey = 'id';

    public function formasDePagos()
    {
        return $this->belongsTo('App\Forma_pago','id_forma_pago');
    }

    public function formasDeEntregas()
    {
        return $this->belongsTo('App\Forma_entrega','id_forma_entrega');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estados','id_estado');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
    
    public function detalle(){
        return $this->hasMany('App\Detalle_venta','id_venta');
    }

    public static function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }   

}
