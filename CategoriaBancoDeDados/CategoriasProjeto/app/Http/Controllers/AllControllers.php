<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\escola;
use App\Models\curso;

class AllControllers extends Controller
{

      /**
      * View de cadastro e cadastro dos cursos
      *
      * @return void
      */

   public function RegistrarCursosHome(){
      $RegistrarCursos = escola::get();
      return view('RegistrarCursosHome', ['RegistrarCursos'=> $RegistrarCursos]);
   }

   public function CadastrarCursos(Request $request){
    $RegistrarCursos = $request->except('_token');
    curso::create($RegistrarCursos);
    return redirect('/');
   }

      /**
      * View de cadastro e cadastro das escolas
      * @return void
      */

   public function EscolasCadastroHome(){ 
      $Escolas = escola::get();
      return view('EscolasCadastroPage',['Escolas'=> $Escolas]);
   }

   public function CadastrarEscolas(Request $request){
      $CadastrarEscola = $request->except('_token');
      escola::create($CadastrarEscola);
      return redirect('/');
     }

      /**
      * View que Mostra as escolas cadastradas 
      *
      * @return void
      */

   public function EscolasCadastradas(){
      $EscolasCadastradas = escola::get();
      return view('EscolasCadastradasView', ['EscolasCadastradas' => $EscolasCadastradas]);
     }
   public function CursosCadastrados(int $id){
      $CursosCadastrados = curso::where('second_id', $id)->get();
      return view('CursosCadastradosView', ['CursosCadastrados' => $CursosCadastrados]);
     }

     
}