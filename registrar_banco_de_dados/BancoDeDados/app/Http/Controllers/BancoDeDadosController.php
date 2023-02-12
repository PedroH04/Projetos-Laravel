<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bancodedadosdata;

class BancoDeDadosController extends Controller
{

        public function CadastroView(){
        return view('Cadastro');
    }   
    public function CadastroForm(Request $request){
        $data = $request->expcept('_token');
        bancodedadosdata::create($data);
        return redirect('/');
    }
}
