<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $table = 'ItemPedido';
    protected $fillable = ['quantidade','valor','idPedido','idProduto'];
}
