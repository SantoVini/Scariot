<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item_pedido;

class Item_pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Item_pedido = Item_pedido::all();
        return view('Item_pedido.index',compact('Item_pedido'));
    }

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
            'quantidade' => $request ->input('quantidade'),
            'valor' => $request ->input('valor'),
            'id_pedido' => $request ->input('id_pedido'),
            'id_produto' => $request ->input('id_produto'),
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

        $Item_pedido->quantidade = $request->input('quantidade');
        $Item_pedido->valor = $request->input('valor');
        $Item_pedido->id_pedido = $request->input('id_pedido');
        $Item_pedido->id_produto = $request->input('id_produto');

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
