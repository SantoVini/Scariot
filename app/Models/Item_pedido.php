<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_pedido extends Model
{
    protected $table = 'Item_pedido';
    protected $fillable = ['quantidade','valor','id_pedido','id_produto'];
}
