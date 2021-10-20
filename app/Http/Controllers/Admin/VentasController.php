<?php

namespace App\Http\Controllers\Admin;

use App\Ventas;
use App\Detalle_venta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VentasController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   
        $order = $req['orderBy'];
        $buscar = $req['buscar'];
        $tipo = $req['tipo'];
        $ventas = Ventas::Buscar($tipo,$buscar)->orderBy(($order=="") ? "id" : $order )->paginate(5);
        $detalle = Detalle_venta::all();
        
        return view('admin.pedidos.index',compact('ventas','detalle','order','buscar','tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit(Ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventas $ventas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ventas  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventas $pedido)
    {
        $pedido->delete();
         return response()->json([
          'message' => 'Data deleted successfully!'
        ]);
    }
}