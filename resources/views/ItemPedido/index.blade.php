<x-app-layout>
    <a href="{{route ('Produto.create')}}" class="btn btn-primary">Novo Produto</a>
    <table class="table">
        <thead>
            <tr>ID</tr>
            <tr>Nome</tr>
            <tr>Descricao</tr>
            <tr>Valor Base</tr>
        </thead>
        <tbody>
            @foreach ($Produto as $Produto)
            <tr>
                <td class="colunas">{{ $Produto->id }}</td>
                <td class="nome">{{ $Produto->nome }}</td>
                <td class="descricao">{{ $Produto->descricao }}</td>
                <td class="valor_base">{{ $Produto->valor_base }}</td>
                <td>
                    <a href="{{ route('Produto.show', $Produto->id) }}" class=btn btn-info>Detalhes</a>
                    <a href="{{ route('Produto.edit', $Produto->id) }}" class=btn btn-warning>Editar</a>
                    <form action="{{ route('Produto.destroy', $Produto->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>