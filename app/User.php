<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Foto;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'email','fecha_nacimiento', 'password','id_foto'
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

    public function nombre(){
        return $this->nombre . " " . $this->apellido;  
    }

    public function foto()
    {
        return $this->belongsTo('App\Fotos', 'id_foto');
    }

    public function domicilio()
    {
        return $this->belongsTo('App\Domicilio', 'id_domicilio');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function productosFavoritos(){
        return $this->belongsToMany('App\Producto','favoritos_users','id_usuario','id_producto');
    }

    public function hasAnyRole($roles){
        if($this->roles()->whereIn('nombre', $roles)->first()){
            return true;
        }
            return false;
    }

    public function hasRole($role){
        if($this->roles()->where('nombre', $role)->first()){
            return true;
        }
            return false;
    }

    public function pedidos()
    {
        return $this->hasMany('App\Ventas','id_usuario');
    }
}
