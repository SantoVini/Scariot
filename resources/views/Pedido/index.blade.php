<x-app-layout>
    <table class="table table-dark table-hover">
        <thead>
            <th>ID</th>
            <th>Descrição</th>
            <th>Data Pedido</th>
            <th>Valor Total</th>
            <th>ID Cliente</th>
            <th><a href="{{route ('Pedido.create')}}" class="btn btn-primary">Novo Pedido</a></th>
        </thead>
        <tbody>
            @foreach ($Pedido as $Pedido)
            <tr>
                <td class="colunas">{{ $Pedido->id }}</td>
                <td class="descrição">{{ $Pedido->descrição }}</td>
                <td class="data_pedido">{{ $Pedido->data_pedido }}</td>
                <td class="valor_total">{{ $Pedido->valor_total }}</td>
                <td class="id_cliente">{{ $Pedido->id_cliente }}</td>
                <td>
                    <a href="{{ route('Pedido.show', $Pedido->id) }}" class="btn btn-info">Detalhes</a>
                    <a href="{{ route('Pedido.edit', $Pedido->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('Pedido.destroy', $Pedido->id) }}" method="POST" style="display: inline;">
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
