<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Colaborador;

class CadastroColaboradorController extends Controller
{
    public function create(){
        return view ('/form_cadastro_colaborador');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'required|string||max:100',
            'email' => 'required|string|unique:colaboradors|email|max:50',
            'senha' => 'required|string|max:20',
        ]);

        $col = new Colaborador();
        $col->nome = $request->nome;
        $col->cargo = $request->cargo;
        $col->email = $request->email;
        $col->password = Hash::make($request->senha);
        $col->administrador = $request->administrador || false;
        $col->excluido = false;
        $col->empresa_id = Auth::user()->empresa->id;
        $col->save();


        return redirect('/home_adm');

    }
}
