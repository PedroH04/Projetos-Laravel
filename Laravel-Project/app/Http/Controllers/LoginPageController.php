<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function Login(Request $request){

        $email = $request->query('email');
        $password = $request->query('password');

        return view('LoginPage',['email'=>$email, 'password'=>$password]);
    }
}
