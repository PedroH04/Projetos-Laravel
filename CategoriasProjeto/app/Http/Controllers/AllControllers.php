<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\escola;
use App\Models\curso;

class AllControllers extends Controller
{
   public function RegistrarCursosHome(){
      $RegistrarCursos = curso::get();
      return view('RegistrarCursosHome', ['RegistrarCursos'=> $RegistrarCursos]);
   }

   public function CadastrarCursos(Request $request){
    $RegistrarCursos = $request->except('_token');
    curso::create($RegistrarCursos);
    return redirect('/');
   }

   public function EscolasCadastroHome(){
      $Escolas = escola::get();
      return view('EscolasCadastroPage',['Escolas'=> $Escolas]);
   }

   public function CadastrarEscolas(Request $request){
      $CadastrarEscola = $request->except('_token');
      escola::create($CadastrarEscola);
      return redirect('/');
     }
}