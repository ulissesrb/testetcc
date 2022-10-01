<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Problema;
use App\ColaboradorProblema;
use App\Colaborador;
use Illuminate\Support\Carbon;

class ProblemasController extends Controller
{
    public function index(){
        return view('home_adm', [
            'user' => Auth::user(),
            'probs' => Auth::user()->problemas
        ]);
    }
    public function primeiro_porque(Problema $prob){
        return view('primeiro_porque', [
            'prob' => $prob,
        ]);
    }

    public function segundo_porque(){
        return view('segundo_porque', [
            'user' => Auth::user(),
            'probs' => Auth::user()->problemas
        ]);
    }



    public function falseIndex(){
        return redirect(route('home_adm'));
    }

    public function create() {
        return view('cadastro_problema');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $prob = new Problema();
        $prob->nome = $request->nome;
        $prob->excluido = false;
        $prob->concluido = false;
        $prob->save();

        $colProb = new ColaboradorProblema();
        $colProb->colaborador_id = Auth::user()->id;
        $colProb->problema_id = $prob->id;
        $colProb->save();

        return redirect('home_adm');
    }

    public function show(Problema $prob){
        return view('problema_principal_adm', [
            'user' => Auth::user(),
            'prob' => $prob,
            'colabs' => $prob->colaboradors
        ]);
    }

    public function addColab(Problema $prob) {
        return view('adicionar_colaborador', [
            'colabs' => Auth::user()->empresa->colaboradors->whereNotIn('id', $prob->colaboradors->pluck('id')),
            'prob' => $prob
        ]);
    }

    public function storeColab(Problema $prob, Request $request){
        foreach(Colaborador::whereIn('nome', $request->colabsToAdd)->pluck('id') as $colabId){
            $colProb = new ColaboradorProblema();
            $colProb->colaborador_id = $colabId;
            $colProb->problema_id = $prob->id;
            $colProb->save();
        }
    }

    public function remove(Problema $prob){
        $prob->excluido = true;
        $prob->excluded_at = Carbon::now();
        $prob->save();

        return redirect('home_adm');
    }

    public function relatorio(){
        return view('relatorio', [
            'user' => Auth::user(),
            'probs' => Colaborador::where('administrador', true)->first()->problemas,
            'empresa' => Auth::user()->empresa
        ]);
    }
}
