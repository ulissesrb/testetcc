<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Problema;

class PorquesController extends Controller
{
    public function primeiro_create(Problema $prob){
        
        if($prob->quinto_porque == null)
        {
            return view('porques.primeiro', [
                'prob' => $prob,
                'empresa' => Auth::user()->empresa,
                'porque' => $prob->primeiro_porque
            ]);
        }
        else 
        {
            return redirect('/problemas/'.$prob->id.'/sub_problema');
        }
        
    }

    public function primeiro_store(Problema $prob, Request $request){
        $request->validate([
            'porque' => 'required|string|max:255',
        ]);

        $prob->primeiro_porque = $request->porque;
        $prob->save();

        return redirect("/problemas/".$prob->id."/segundo_porque");
    }

    public function segundo_create(Problema $prob){
        return view('porques.segundo', [
            'prob' => $prob,
            'empresa' => Auth::user()->empresa,
            'porque' => $prob->segundo_porque
        ]);
    }

    public function segundo_store(Problema $prob, Request $request){
        $request->validate([
            'porque' => 'required|string|max:255',
        ]);

        $prob->segundo_porque = $request->porque;
        $prob->save();

        return redirect("/problemas/".$prob->id."/terceiro_porque");
    }

    public function terceiro_create(Problema $prob){
        return view('porques.terceiro', [
            'prob' => $prob,
            'empresa' => Auth::user()->empresa,
            'porque' => $prob->terceiro_porque
        ]);
    }

    public function terceiro_store(Problema $prob, Request $request){
        $request->validate([
            'porque' => 'required|string|max:255',
        ]);

        $prob->terceiro_porque = $request->porque;
        $prob->save();

        return redirect("/problemas/".$prob->id."/quarto_porque");
    }

    public function quarto_create(Problema $prob){
        return view('porques.quarto', [
            'prob' => $prob,
            'empresa' => Auth::user()->empresa,
            'porque' => $prob->quarto_porque
        ]);
    }

    public function quarto_store(Problema $prob, Request $request){
        $request->validate([
            'porque' => 'required|string|max:255',
        ]);

        $prob->quarto_porque = $request->porque;
        $prob->save();

        return redirect("/problemas/".$prob->id."/quinto_porque");
    }

    public function quinto_create(Problema $prob){
        return view('porques.quinto', [
            'prob' => $prob,
            'empresa' => Auth::user()->empresa,
            'porque' => $prob->quinto_porque
        ]);
    }

    public function quinto_store(Problema $prob, Request $request){
        $request->validate([
            'porque' => 'required|string|max:255',
        ]);

        $prob->quinto_porque = $request->porque;
        $prob->save();

        return redirect("/problemas/".$prob->id."/quinto_porque");
    }
}
