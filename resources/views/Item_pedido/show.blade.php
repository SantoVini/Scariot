<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Item_pedido') }}
        </h2>
    </x-slot>
    <section class="details">
        <div class="content">
            <div class="meta">
                <span class="label">ID:</span>
                <span class="info">{{ $Item_pedido->id }}</span>
            </div>
            <div class="meta">
                <span class="label">Quantidade:</span>
                <span class="info">{{ $Item_pedido->quantidade }}</span>
            </div>
            <div class="meta">
                <span class="label">Valor:</span>
                <span class="info">{{ $Item_pedido->valor }}</span>
            </div>
            <div class="meta">
                <span class="label">ID Pedido:</span>
                <span class="info">{{ $Item_pedido->id_pedido }}</span>
            </div>
            <div class="meta">
                <span class="label">ID Produto:</span>
                <span class="info">{{ $Item_pedido->id_produto }}</span>
            </div>
        </div>
        <a href="{{ route('Item_pedido.index') }}" class="btn-return">Voltar</a>
    </section>
</x-app-layout>