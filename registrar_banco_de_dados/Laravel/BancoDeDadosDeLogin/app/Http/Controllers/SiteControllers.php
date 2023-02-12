<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class SiteControllers extends Controller
{
    public function accountsHome(){
        $datalogin = login::all();
        return view('ViewLogin',['datalogin'=> $datalogin]);
    }
}
