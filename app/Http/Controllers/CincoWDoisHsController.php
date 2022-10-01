<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CincoWDoisHsController extends Controller
{
    public function create()
    {
        return view("CincoWDoisHs");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'what' => 'required|string|max:255',
            'why' => 'required|string|max:255',
            'where' => 'required|string|max:255',
            'when' => 'required|string|max:255',
            'who' => 'required|string|max:255',
            'how' => 'required|string|max:255',
            'how_much' => 'required|string|max:255',
               
        ]);

        dd($validatedData);
        
    }
}

