<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    public function logout(Request $request){
        $req = $request->session()->flush();
        return redirect("/");
    }
}
