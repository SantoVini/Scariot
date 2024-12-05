<x-app-layout>
    <table class="table table-dark table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor Base</th>
            <th><a href="{{route ('Produto.create')}}" class="btn btn-primary">Novo Produto</a></th>
        </thead>
        <tbody>
            @foreach ($Produto as $Produto)
            <tr>
                <td class="colunas">{{ $Produto->id }}</td>
                <td class="nome">{{ $Produto->nome }}</td>
                <td class="descrição">{{ $Produto->descrição }}</td>
                <td class="valor_base">{{ $Produto->valor_base }}</td>
                <td>
                    <a href="{{ route('Produto.show', $Produto->id) }}" class="btn btn-info">Detalhes</a>
                    <a href="{{ route('Produto.edit', $Produto->id) }}" class="btn btn-warning">Editar</a>
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