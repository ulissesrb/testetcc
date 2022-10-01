<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorqueController extends Controller
{
    public function create(){
        return view("primeiro_porque");
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'problema_1' => 'required|string|problema_1|max:255',
            'problema_2' => 'required|string|problema_2|max:255',
            'problema_3' => 'required|string|problema_3|max:255',
            'problema_4' => 'required|string|problema_4|max:255',
            'problema_5' => 'required|string|problema_5|max:255',

        ]);
    }

}
