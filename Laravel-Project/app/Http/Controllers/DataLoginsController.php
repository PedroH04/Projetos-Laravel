<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logindata;

class DataLoginsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $logindatas = logindata::all();
       return view('logindatasview', ['logindatas' =>$logindatas]);
        
    }
}
