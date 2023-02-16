<?php

namespace App\Http\Controllers;

use App\Models\bancodedado;
use Illuminate\Http\Request;

class CadastroControllers extends Controller
{
    public function HomeView(){
        $search = request('search');

        $datas = Bancodedado::where('Nome', 'LIKE', '%'.$search.'%')->orderBy('id','desc')->limit(1)->get();

        return View('HomeView', ['datas'=>$datas , 'search' => $search]);
    }
}
