<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
class CarritoController extends Controller
{
    public function view(){
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('carrito',compact('cartItems'));
    }

    public function add($product){

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

    public function destroy($itemId){
        \Cart::session(auth()->id())->remove($itemId);
        return back();
    }

    public function update($itemId){
        \Cart::session(auth()->id())->update($itemId, array(
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ));
        return back();
    }

    public function clear(){
        \Cart::session(auth()->id())->clear();
        return back();
    }
}
