<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
	public function categorias()
	{
		$categorias = Categoria::all();
		return json_encode($categorias);
	}

	public function productos()
	{
		$productos = DB::table('productos')
			->leftJoin('categorias', 'productos.id_categoria', '=', 'categorias.id')
			->select('productos.*', 'categorias.nombre as categoria')
			->get();

		return json_encode($productos);
	}
}
