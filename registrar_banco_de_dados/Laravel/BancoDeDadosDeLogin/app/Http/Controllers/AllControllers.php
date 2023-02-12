<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginecadastro;

class AllControllers extends Controller
{
    /*Controlador do ID dos usuarios*/
    public function UserView(int $id){
        $datas = loginecadastro::find($id);
        return view('userview', ['datas' => $datas]);
    }

    /*Controladores Do cadastro*/
    public function CadastroView(){
        return view('cadastroview');

    }

    public function CadastroForm(Request $request){
        $form = $request->except('_token');

        loginecadastro::create('$form');

        return redirect('/');
    }

}
