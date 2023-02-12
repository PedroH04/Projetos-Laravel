<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dado;

class BancoDeDadosController extends Controller
{
    public function CadastroView(){
        return view('Cadastro');
    }   
    public function CadastroForm(Request $request){
        $data = $request->except('_token');
        dado::create($data);
        return redirect('/');
    }
}
