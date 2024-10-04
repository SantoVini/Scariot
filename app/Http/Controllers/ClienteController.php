<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Cliente = Cliente::all();
        return view('Cliente.index',compact('Cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Cliente = new Cliente([
            'nome' => $request ->input('nome'),
            'endereco' => $request ->input('endereco'),
            'cpf' => $request ->input('cpf')
        ]);

        $autor->save();

        return redirect()->route('Cliente.index'); 

     /*    $request->validate([
            'nome' => 'required|string|max:100',
            'endereco' => 'string|max:800',
            'cpf' => 'required|string|max:11'
        ]);

        Cliente::create($request->all());

        return redirect()->route('Cliente.index')->with('Deu certo');*/ 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
