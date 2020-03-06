<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Foto;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'email', 'password','id_foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function foto()
    {
        return $this->belongsTo('App\Fotos', 'id_foto');
    }
    

    public function carrito()
    {
        return $this->belongsTo('App\CarritoUser', 'id_usuario');
    }

    public static function obtenerCantidadProductoCarrito(){
        if (auth()->user()){
            $cantidad = count(CarritoUser::where('id_usuario', auth()->user()->id)->get());
        }else{
            $cantidad = 0;
        }
        return $cantidad;
    }
}
