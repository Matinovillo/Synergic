<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Fotos;
use App\Producto;
use App\Domicilio;
use App\Provincia;
use App\Favoritos;

class CuentaController extends Controller
{
     
    //User profile methods

    
    public function datos(){
       
            $foto = User::find(auth()->user()->id)->foto;
            $domicilio = User::find(auth()->user()->id)->domicilio;
            $provincias = Provincia::all();
            $vac = compact('foto','domicilio','provincias');
            return view('cuenta.user', $vac);
           
    }

    public function favoritos(){
        $idProd = array();
        $favoritos = Favoritos::where('id_usuario',auth()->id())->get();
        foreach($favoritos as $fav){
        array_push($idProd, $fav->id_producto);
        }
        $favs = Producto::whereIn('id',$idProd)->get();
        return view('cuenta.favoritos',compact('favs'));
    }

    public function pedidos(){
        return view('cuenta.pedidos');
    }

    public function edit(){
        $domicilio = User::find(auth()->user()->id)->domicilio;
        $provincias = Provincia::all();
        $vac = compact('domicilio','provincias');
        return view('cuenta.actualizar', $vac);
    }

    public function update(Request $req){
        $user = new User();
        $user = User::find(auth()->user()->id);
        $user->nombre = $req['nombre'];
        $user->apellido = $req['apellido'];
        $user->email = $req['email'];
        $user->fecha_nacimiento = $req['fecha_nacimiento'];
        
        $domicilio = User::find(auth()->user()->id)->domicilio;
        if($domicilio == null){
            $domicilio = new Domicilio();
            $domicilio->calle = $req['calle'];
            $domicilio->barrio = $req['barrio'];
            $domicilio->numero = $req['numero'];
            $domicilio->codigo_postal = $req['codigo_postal'];
            $domicilio->id_provincia = $req['id_provincia'];
            $domicilios = Domicilio::all();
            if(count($domicilios)==0){
                $domicilio->save();
                $domicilios = Domicilio::all();
                $domicilios = $domicilios->last();
                $domiciliosId = $domicilios->id;
                $user->id_domicilio = $domiciliosId;
            }else{
                $domicilios = $domicilios->last();
                $domiciliosId = $domicilios->id+1;
                $user->id_domicilio = $domiciliosId;
                $domicilio->save();
            }  
        }else{
            $domicilio->calle = $req['calle'];
            $domicilio->barrio = $req['barrio'];
            $domicilio->numero = $req['numero'];
            $domicilio->codigo_postal = $req['codigo_postal'];
            $domicilio->id_provincia = $req['id_provincia'];
            $domicilio->save();
        }
        $user->save();
        
        return redirect('cuenta/datospersonales')->with('success', 'Los datos fueron actualizados.');
    }

}
