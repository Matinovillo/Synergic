<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favoritos;

class FavoritosController extends Controller
{
    public function add($id){
        $favorito = new Favoritos();
        $favorito->id_producto = $id;
        $favorito->id_usuario = auth()->id();
        $favorito->save();
        return back();
    }

    public function destroy($id){
        $producto = Favoritos::where([
            ['id_producto', '=', $id],
            ['id_usuario', '=', auth()->id()],
        ])->get()->first();
        
        $producto->delete();
        return back();
    }

}
