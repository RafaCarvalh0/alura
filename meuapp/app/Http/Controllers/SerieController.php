<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie; 

class SerieController extends Controller
{
    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        Serie::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('series.create')->with('success', 'Série registrada com sucesso!');
    }
}