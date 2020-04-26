<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Ventas;
use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $dia= date("y-m-d");
        $newusers = User::where('created_at', $dia)->get();
        $productos = Producto::where('stock','<=',0)->get();
        $pedidos = Ventas::all();
        $sinstock = count($productos);
        $categorias = Categoria::all();
        return view('admin.admin',compact('newusers','sinstock','pedidos','categorias'));
    }
    
    
}
