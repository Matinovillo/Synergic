<?php

namespace App\Http\Controllers;

use App\User;

use App\Ventas;
use App\Provincia;
use App\Forma_pago;
use App\Detalle_venta;
use App\Forma_entrega;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
	public function completarDatos()
	{
		$cart = \Cart::session(auth()->id())->getContent();
		$domicilio = User::find(auth()->user()->id)->domicilio;
		$provincias = Provincia::all();
		$vac = compact('domicilio', 'provincias', 'cart');
		return view('comprar.index', $vac);
	}

	public function opcionesCompra()
	{
		$cart = \Cart::session(auth()->id())->getContent();
		$entrega = Forma_entrega::all();
		$pago = Forma_pago::all();
		$vac = compact('cart', 'entrega', 'pago');
		return view('comprar.opciones', $vac);
	}

	public function crearPedido(Request $req)
	{
		$codigo = Ventas::generarCodigo(6);

		Ventas::create([
			'codigo' => $codigo,
			'id_forma_entrega' => $req['forma_entrega'],
			'id_forma_pago' => $req['forma_pago'],
			'id_estado' => 1,
			'id_usuario' => auth()->user()->id,
			'precio_total' => \Cart::session(auth()->id())->getTotal(),
		]);

		$idPedido = Ventas::where('codigo', $codigo)->first();
		$id = $idPedido->id;
		$productos = \Cart::session(auth()->id())->getContent();
		foreach ($productos as $producto) {
			Detalle_venta::create([
				"id_producto" => $producto->id,
				"cantidad" => $producto->quantity,
				"precio_unitario" => $producto->price,
				"id_venta" => $id,
			]);
		}

		return back()->with('success', 'Las modificaciones se guardaron correctamente');
	}

	public function finalizarCompra(Request $Req)
	{
	}
}