<x-app-layout>
    <a href="{{route ('Item_pedido.create')}}" class="btn btn-primary">Novo Produto</a>
    <table class="table">
        <thead>
            <tr>ID</tr>
            <tr>Nome</tr>
            <tr>Descricao</tr>
            <tr>Valor Base</tr>
        </thead>
        <tbody>
            @foreach ($Item_pedido as $Item_pedido)
            <tr>
                <td class="colunas">{{ $Item_pedido->id }}</td>
                <td class="quantidade">{{ $Item_pedido->quantidade }}</td>
                <td class="valor">{{ $Item_pedido->valor }}</td>
                <td class="id_pedido">{{ $Item_pedido->id_pedido }}</td>
                <td class="id_produto">{{ $Item_pedido->id_produto }}</td>
                <td>
                    <a href="{{ route('Item_pedido.show', $Item_pedido->id) }}" class=btn btn-info>Detalhes</a>
                    <a href="{{ route('Item_pedido.edit', $Item_pedido->id) }}" class=btn btn-warning>Editar</a>
                    <form action="{{ route('Item_pedido.destroy', $Item_pedido->id) }}" method="POST" style="display: inline;">
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