<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'Pedido';
    protected $fillable = ['descrição','data_pedido','valor_total','id_cliente'];

    public function itens()
    {
        return $this->hasMany(Item_pedido::class, 'Id_pedido');
    }

    public function calcularTotal()
    {
        return $this->itens->sum(function ($item) {
            return $item->quantidade * $item->valor;
        });
    }

    public function mostrarPedido($id)
    {
        $pedido = Pedido::with('itens')->findOrFail($id);

        $total = $pedido->calcularTotal();

        return response()->json([
            'pedido' => $pedido,
            'total' => $total,
        ]);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'Id_cliente');
    }
}
