<?php

namespace App\Http\Controllers;

use App\Ventas;
use App\Detalle_venta;
use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    

    public function sucess(Request $req){
       $cart = \Cart::session(auth()->id())->getContent();
       $totalprice = \Cart::session(auth()->id())->getTotal();   
       $response = $req->all();

       $pedido = new Ventas();
       $pedido->codigo = $response['collection_id'];
       $pedido->estado = $response['collection_status'];
       $pedido->forma_pago = $response['payment_type'];
       $pedido->precio_total = $totalprice;
       $pedido->id_usuario = auth()->id();
       $pedido->save();
       
       $venta = Ventas::all();
       $venta = $venta->last();
       foreach($cart as $producto){
           $detalle = new Detalle_venta();
           $detalle->id_producto = $producto->id;
           $detalle->cantidad = $producto->quantity;
           $detalle->precio_unitario = $producto->price;
           $detalle->id_venta = $venta->id;
           $detalle->save();
       }

       \Cart::session(auth()->id())->clear();

       return redirect(url('cuenta/mispedidos'))->with('success', 'Gracias por tu compra!');
    }

    public function failure(Request $req){
        return redirect(url('/carrito'))->with('fail', 'Cancelaste tu compra.');
    }

    public function pending(Request $req){
       $cart = \Cart::session(auth()->id())->getContent();
       $totalprice = \Cart::session(auth()->id())->getTotal();   
       $response = $req->all();

       $pedido = new Ventas();
       $pedido->codigo = $response['collection_id'];
       $pedido->estado = $response['collection_status'];
       $pedido->forma_pago = $response['payment_type'];
       $pedido->precio_total = $totalprice;
       $pedido->id_usuario = auth()->id();
       $pedido->save();
       
       $venta = Ventas::all();
       $venta = $venta->last();
       foreach($cart as $producto){
           $detalle = new Detalle_venta();
           $detalle->id_producto = $producto->id;
           $detalle->cantidad = $producto->quantity;
           $detalle->precio_unitario = $producto->price;
           $detalle->id_venta = $venta->id;
           $detalle->save();
       }

       \Cart::session(auth()->id())->clear();

       return redirect(url('cuenta/mispedidos'))->with('info', 'El pedido esta siendo procesado');
       
    }
}
