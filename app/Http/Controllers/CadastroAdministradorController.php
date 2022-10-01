<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Empresa;
use App\Colaborador;

class CadastroAdministradorController extends Controller
{
    public function create(){
        return view ('/form_cadastro_administrador');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'required|string||max:100',
            'email' => 'required|string|unique:colaboradors|email|max:50',
            'senha' => 'required|string|max:20',
        ]);

        $emp = new Empresa();
        $emp->nome = session()->get('nome');
        $emp->razao_social = session()->get('razao_social');
        $emp->area_atuacao = session()->get('area_atuacao');
        $emp->cnpj = session()->get('cnpj');
        $emp->num_funcionarios = session()->get('num_funcionarios');
        $emp->cep = session()->get('cep');
        $emp->email = session()->get('email');
        $emp->excluido = false;
        $emp->save();

        $col = new Colaborador();
        $col->nome = $request->nome;
        $col->cargo = $request->cargo;
        $col->email = $request->email;
        $col->password = Hash::make($request->senha);
        $col->administrador = true;
        $col->excluido = false;
        $col->empresa_id = $emp->id;
        $col->save();

        Auth::login($col);

        return redirect('home_adm');
    }
}
