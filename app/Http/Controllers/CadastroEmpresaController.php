<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class CadastroEmpresaController extends Controller
{

    public function create() {
        return view('form_cadastro_empresa');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required|string|unique:empresas|max:255',
            'razao_social' => 'required|string|unique:empresas|max:255',
            'area_atuacao' => 'required|string|max:30',
            'cnpj' => 'required|string|unique:empresas|max:20',
            'num_funcionarios' => 'required|integer',
            'cep' => 'required|string|max:100',
            'email' => 'required|string|unique:empresas|email|max:255',
        ]);
       

        session()->put('nome', $request->nome);
        session()->put('razao_social', $request->razao_social);
        session()->put('area_atuacao', $request->area_atuacao);
        session()->put('cnpj', $request->cnpj);
        session()->put('num_funcionarios', $request->num_funcionarios);
        session()->put('cep', $request->cep);
        session()->put('email', $request->email);

        return redirect('/cadastro_administrador');


    }

   
}
