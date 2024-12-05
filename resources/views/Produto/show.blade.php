<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Clientes') }}
        </h2>
    </x-slot>
    <section class="details">
        <div class="content">
            <div class="meta">
                <span class="label">ID:</span>
                <span class="info">{{ $Produto->id }}</span>
            </div>
            <div class="meta">
                <span class="label">Nome:</span>
                <span class="info">{{ $Produto->nome }}</span>
            </div>
            <div class="meta">
                <span class="label">Descrição:</span>
                <span class="info">{{ $Produto->descrição }}</span>
            </div>
            <div class="meta">
                <span class="label">Valor Base:</span>
                <span class="info">{{ $Produto->valor_base }}</span>
            </div>
        </div>
        <a href="{{ route('Produto.index') }}" class="btn-return">Voltar</a>
    </section>

</x-app-layout>