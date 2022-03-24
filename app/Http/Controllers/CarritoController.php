<?php

namespace App\Http\Controllers;

use App\Producto;

class CarritoController extends Controller
{
	public function view()
	{
		$cartItems = \Cart::session(auth()->id())->getContent();
		return view('carrito', compact('cartItems'));
	}

	public function add($product)
	{

		$product = Producto::find($product);
		$foto = $product->fotos()->first();
		$imagen = $foto->nombre;
		// add the product to cart
		\Cart::session(auth()->id())->add(array(
			'id' => $product->id,
			'name' => $product->nombre,
			'price' => $product->precio,
			'quantity' => 1,
			'attributes' => array(
				"imagen" => $imagen
			),
			'associatedModel' => $product
		));

		return redirect()->route('cart');
	}

	public function destroy($itemId)
	{
		\Cart::session(auth()->id())->remove($itemId);
		return back();
	}

	public function update($itemId)
	{
		\Cart::session(auth()->id())->update($itemId, array(
			'quantity' => array(
				'relative' => false,
				'value' => request('quantity')
			)
		));
		return back();
	}

	public function clear()
	{
		\Cart::session(auth()->id())->clear();
		return back();
	}

	//mercado pago
	public function confirm()
	{
		\MercadoPago\SDK::setAccessToken(env('MP_TEST_ACCESS_TOKEN'));

		$cart = \Cart::session(auth()->id())->getContent();
		// Crea un objeto de preferencia
		$preference = new \MercadoPago\Preference();
		$productos = [];

		// Crea un ítem en la preferencia
		foreach ($cart as $product) {
			$item = new \MercadoPago\Item();
			$item->title = $product->name;
			$item->category_id = $product->model->categoria()->first()->nombre;
			$item->currency_id = "ARS";
			$item->quantity = $product->quantity;
			$item->unit_price = $product->price;

			$productos[] = $item;
		}
		$preference->items = $productos;
		$preference->back_urls = [
			"success" => route('mp.sucess'),
			"failure" => route('mp.failure'),
			"pending" => route('mp.pending')
		];
		$preference->save();
		return redirect($preference->init_point);
	}
}
