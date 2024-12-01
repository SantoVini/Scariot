<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Produto = Produto::all();
        return view('Produto.index',compact('Produto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Produto = new Produto([
            'nome' => $request ->input('nome'),
            'descrição' => $request ->input('descrição'),
            'valor_base' => $request ->input('valor_base'),
        ]);

        $Produto->save();

        return redirect()->route('Produto.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Produto = Produto::findOrFail($id);
        return view ('Produto.show', compact('Produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Produto = Produto::findOrFail($id);
        return view('Produto.edit', compact('Produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Produto = Produto::findOrFail($id);

        $Produto->nome = $request->input('nome');
        $Produto->descrição = $request->input('descrição');
        $Produto->valor_base = $request->input('valor_base');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Produto = Produto::findOrFail($id);

        $Produto->delete();
        return redirect()->route('Produto.index');
    }
}
