<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class FormController extends Controller
{

    public function Fomulario(Request $request)
    {
        $forms = new Form;
        $forms ->email = $request->email;
        $forms ->password = $request->password;
        $forms->save();

        return redirect('/');
    }
}
