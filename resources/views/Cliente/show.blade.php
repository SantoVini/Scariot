<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Clientes') }}
        </h2>
    </x-slot>
    <div class="px-4 py-5 my-5 text-center">
        <section class="details">
            <div class="content">
                <div class="meta text-light lead mb-4">
                    <span class="label">ID:</span>
                    <span class="info">{{ $Cliente->id }}</span>
                </div>
                <div class="meta text-light lead mb-4">
                    <span class="label">Nome:</span>
                    <span class="info">{{ $Cliente->nome }}</span>
                </div>
                <div class="meta text-light lead mb-4">
                    <span class="label">CPF:</span>
                    <span class="info">{{ $Cliente->cpf }}</span>
                </div>
                <div class="meta text-light lead mb-4">
                    <span class="label">Email:</span>
                    <span class="info">{{ $Cliente->email }}</span>
                </div>
            </div>
            <a href="{{ route('Cliente.index') }}" class="btn btn-primary">Voltar</a>
        </section>
    </div>
</x-app-layout>