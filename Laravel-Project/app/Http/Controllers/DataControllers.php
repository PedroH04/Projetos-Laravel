<?php

namespace App\Http\Controllers;

use App\Models\bancodedado;
use Illuminate\Http\Request;

class DataControllers extends Controller
{

    public function Home(){
        $Datas = bancodedado::all();
       return view('home', ['Datas' =>$Datas]);
    }

    public function DataView(int $id){

        $data = bancodedado::find($id);
        return view('perfilviews',['data' => $data]);

    }
    public function RegisterView(){
        return view('FormCadastro');
    }
    public function RegisterForm(Request $request){
        $data = $request->except('_token');
        bancodedado::create($data);
        return redirect('/');
    }
}
