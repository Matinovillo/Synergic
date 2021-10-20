<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use App\Fotos;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'min:3', 'max:255'],
            'apellido' => ['required', 'string','min:4', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'fecha_nacimiento' =>['required','date'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'avatar' => ['file'],
        
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Array $data)
    {   
        if (isset($data['avatar'])){
        $ruta = $data['avatar']->store('public');
          $nombreArchivo = basename($ruta);
          $foto = new Fotos();
          $foto->nombre = $nombreArchivo;
          $foto->save();

          $fotos = Fotos::all();
          $fotos = $fotos->last();
        
        }

        $newUser = User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'password' => Hash::make($data['password']),
            'id_foto' => $avatar = (isset($data['avatar'])) ? $fotos->id : 1,
        ]);

        $rol = Role::select('id')->where('nombre','user')->first();

        $newUser->roles()->attach($rol);
        return $newUser;
    }

    
}
