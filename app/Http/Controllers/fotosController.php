<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotos;

class fotosController extends Controller
{
    public function getId (){
        Fotos::create('users')->insert([
            'name' => 'TestName'
        ]);
        $id = Fotos::getPdo()->lastInsertId();;
    }


    protected function create(array $data)
    {
        return Fotos::create([
            'avatar' => $data['avatar'],
        ]);
    }

}
