<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigColaboradorController extends Controller
{
    public function create()
    {
        return view("config_colaborador");
    }

    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'required|string||max:100',
            'email' => 'required|string|unique:colaboradors|email|max:50',
            'senha' => 'required|string|max:20',
        ]);

        $col->nome = $request->nome;
        $col->cargo = $request->cargo;
        $col->email = $request->email;
        $col->password = Hash::make($request->senha);
        $col->administrador = $request->administrador || false;
        $col->excluido = false;
        $col->save();
        Colaboradores::find($id)->update($col);

        return redirect('/problema_principal_adm');

    }
    
}

