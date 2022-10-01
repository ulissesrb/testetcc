<?php

namespace App\Http\Controllers;

use App\Problema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubProblemaController extends Controller
{
    public function create(Problema $prob){
        return view('sub_problema', [
            'empresa' => Auth::user()->empresa,
            'prob' => $prob,
            'sub' => [1, 2]
        ]);
    }
}
