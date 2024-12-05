<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Pedido') }}
        </h2>
    </x-slot>
    <section class="details">
        <div class="content">
            <div class="meta">
                <span class="label">ID:</span>
                <span class="info">{{ $Pedido->id }}</span>
            </div>
            <div class="meta">
                <span class="label">Descrição:</span>
                <span class="info">{{ $Pedido->descrição }}</span>
            </div>
            <div class="meta">
                <span class="label">Data do Pedido:</span>
                <span class="info">{{ $Pedido->data_pedido }}</span>
            </div>
            <div class="meta">
                <span class="label">Valor Total:</span>
                <span class="info">{{ $Pedido->valor_total }}</span>
            </div>
            <div class="meta">
                <span class="label">ID Cliente:</span>
                <span class="info">{{ $Pedido->id_cliente }}</span>
            </div>
        </div>
        <a href="{{ route('Pedido.index') }}" class="btn-return">Voltar</a>
    </section>

</x-app-layout>
