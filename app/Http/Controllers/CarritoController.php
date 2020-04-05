<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
class CarritoController extends Controller
{
    public function view(){
        return view('carrito');
    }
}
