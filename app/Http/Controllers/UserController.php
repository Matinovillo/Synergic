<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Fotos;
class UserController extends Controller
{
    public function cuenta(){
        
        $foto = User::find(auth()->user()->id)->foto;
        
        return view('/cuenta',compact('foto'));
        
    }
}
