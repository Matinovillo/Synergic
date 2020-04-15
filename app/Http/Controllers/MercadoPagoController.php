<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    

    public function sucess(Request $req){
        dd($req);
    }

    public function failure(Request $req){
        dd($req);
    }

    public function pending(Request $req){
        dd($req);
    }
}
