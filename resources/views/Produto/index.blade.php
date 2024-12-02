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