<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Item_pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pedido = Pedido::all();
        return view('Pedido.index',compact('Pedido'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Pedido.create');

        try {
            \DB::beginTransaction();

            $pedido = Pedido::create(['cliente_id' => $dadosPedido['cliente_id']]);

            foreach ($dadosPedido['itens'] as $item) {
                $pedido->itens()->create($item);
            }

            \DB::commit();

            return response()->json([
                'message' => 'Pedido criado com sucesso!',
                'pedido' => $pedido->load('itens'),
            ], 201);
        } catch (\Exception $e) {
            \DB::rollBack();
            return response()->json([
                'message' => 'Erro ao criar o pedido.',
                'error' => $e->getMessage(),
            ], 500);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Pedido = new Pedido([
            'descrição' => $request ->input('descrição'),
            'data_do_pedido' => $request ->input('data_do_pedido'),
            'valor_total' => $request ->input('valor_total'),
            'id_cliente' => $request ->input('id_cliente'),
        ]);

        $Pedido->save();

        return redirect()->route('Pedido.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Pedido = Pedido::findOrFail($id);
        return view ('Pedido.show', compact('Pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Pedido = Pedido::findOrFail($id);
        return view('Pedido.edit', compact('Pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Pedido = Pedido::findOrFail($id);

        $Pedido->descrição = $request->input('descrição');
        $Pedido->data_do_pedido = $request->input('data_do_pedido');
        $Pedido->valor_total = $request->input('valor_total');
        $Pedido->id_cliente = $request->input('id_cliente');

        $Pedido->save();

        return redirect()->route('Pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Pedido = Pedido::findOrFail($id);

        $Pedido->delete();
        return redirect()->route('Pedido.index');
    }

    public function mostrarPedido($id)
    {
        // Carregar o pedido junto com o cliente e os itens
        $pedido = Pedido::with(['cliente', 'itens'])->findOrFail($id);

        // Opcional: Calcular o total (se necessário)
        $total = $pedido->calcularTotal();

        // Retornar os dados
        return response()->json([
            'pedido' => $pedido,
            'cliente' => $pedido->cliente, // Dados do cliente
            'total' => $total,
        ]);
    }
}
