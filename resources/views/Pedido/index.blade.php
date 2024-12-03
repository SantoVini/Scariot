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

    <footer style="background-color: #282828; color: #fff; padding: 20px 0; text-align: center;">
        <div style="margin-bottom: 10px;">
            <p style="margin: 0;">Siga-nos nas redes sociais:</p>
        </div>

        <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 20px;">
            <a href="https://www.facebook.com/p/Scariot-Lanches-100054649591322/" target="_blank" 
            style="display: inline-block; width: 40px; height: 40px; text-decoration: none; background-color: #3b5998; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="width: 24px;">
            </a>
            <a href="https://www.instagram.com/scariotlanches/" target="_blank" 
            style="display: inline-block; width: 40px; height: 40px; text-decoration: none; background-color: #E1306C; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" style="width: 24px;">
            </a>
        
        </div>
        <div style="margin-top: 20px;">
            <p style="margin: 0; font-size: 14px;">&copy; 2024 Seu Site. Todos os direitos reservados.</p>
        </div>
    </footer>
</x-app-layout>
