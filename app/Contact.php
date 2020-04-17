<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $table = 'mensajes';
     protected $guarded = [];

     public static function tel ( $tel ) {
        //eliminamos todo lo que no es dígito
        $num = preg_replace( '/\D+/', '', $tel);
        //devolver si coincidió con el regex
        return preg_match(
            '/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/D',
            $num
        );
    }
}
