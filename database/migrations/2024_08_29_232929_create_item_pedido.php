<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_pedido', function (Blueprint $table) {
            $table->id();
            $table->integer("quantidade");
            $table->integer("valor");
            $table->unsignedBigInteger("id_pedido");
            $table->unsignedBigInteger("id_produto");
            $table->timestamps();

            $table->foreign('id_produto')->references('id')->on('produto');
            $table->foreign('id_pedido')->references('id')->on('pedido');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_pedido');
    }
};
