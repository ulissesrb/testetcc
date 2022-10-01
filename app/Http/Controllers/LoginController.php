<?php

namespace App\Http\Controllers;

use App\Colaborador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('/form_login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:50',
            'senha' => 'required|string|max:20'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
            return redirect('/home_adm');
        }
        else{
            return redirect('/login')->with('status', '! Credenciais incorretas');
        }

    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
