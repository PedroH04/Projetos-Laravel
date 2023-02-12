<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function Log_in(int $id=null){
        $Accounts = [
            'Name' => [
                'Pedro',
                'Gustavo',
                'Rodrigo'
            ],
            'PassWords' => [
                'PedroSenha',
                'GustavoSenha',
                'RodrigoSenha'
            ]
    ];
        return view('RouteControllerACC',['ACC'=> $Accounts]);
    }
}
