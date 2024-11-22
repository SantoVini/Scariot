<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Item_pedido extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Item_pedido = Item_pedido::all();
        return view('Item_pedido.index',compact('Item_pedido'));

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Item_pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Item_pedido = new Item_pedido([
            'nome' => $request ->input('nome'),
            'endereço' => $request ->input('endereço'),
            'cpf' => $request ->input('cpf'),
            'email' => $request ->input('email'),
        ]);

        $Item_pedido->save();

        return redirect()->route('Item_pedido.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Item_pedido = Item_pedido::findOrFail($id);
        return view ('Item_pedido.show', compact('Item_pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Item_pedido = Item_pedido::findOrFail($id);
        return view('Item_pedido.edit', compact('Item_pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Item_pedido = Item_pedido::findOrFail($id);

        $Item_pedido->nome = $request->input('nome');
        $Item_pedido->endereço = $request->input('endereço');
        $Item_pedido->cpf = $request->input('cpf');
        $Item_pedido->email = $request->input('email');

        $Item_pedido->save();

        return redirect()->route('Item_pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Item_pedido = Item_pedido::findOrFail($id);

        $Item_pedido->delete();
        return redirect()->route('Item_pedido.index');
    }
}
