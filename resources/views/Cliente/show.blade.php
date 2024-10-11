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
                <span class="info">{{ $Cliente->id }}</span>
            </div>
            <div class="meta">
                <span class="label">Nome:</span>
                <span class="info">{{ $Cliente->nome }}</span>
            </div>
            <div class="meta">
                <span class="label">CPF:</span>
                <span class="info">{{ $Cliente->cpf }}</span>
            </div>
            <div class="meta">
                <span class="label">Email:</span>
                <span class="info">{{ $Cliente->email }}</span>
            </div>
        </div>
        <a href="{{ route('Cliente.index') }}" class="btn-return">Voltar</a>
    </section>
</x-app-layout>