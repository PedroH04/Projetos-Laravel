<?php

namespace App\Http\Controllers;

use App\Models\bancodedado;
use Illuminate\Http\Request;

class homebancodedados extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas = bancodedado::all();
        return view('home', ['datas' => $datas]);

    }
}
