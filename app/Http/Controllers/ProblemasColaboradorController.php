<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Problema;
use App\ColaboradorProblema;

class ProblemasColaboradorController extends Controller
{
    public function index(){
        return view('home_colaborador', [
            'user' => Auth::user(),
            'probs' => Auth::user()->problemas
        ]);
    }

    public function falseIndex(){
        return redirect(route('home_colaborador'));
    }

    public function show(Problema $prob){
        return view('problema_principal_colaborador', [
            'user' => Auth::user(),
            'prob' => $prob,
        ]);
    }
}
