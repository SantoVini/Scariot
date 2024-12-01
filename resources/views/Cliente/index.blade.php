<x-app-layout>
    <a href="{{route ('Cliente.create')}}" class="btn btn-primary">Novo Cliente</a>
    <table class="table table-dark table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CPF</th>
            <th>Email</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($Cliente as $Cliente)
            <tr>
                <td class="colunas">{{ $Cliente->id }}</td>
                <td class="nome">{{ $Cliente->nome }}</td>
                <td class="endereço">{{ $Cliente->endereço }}</td>
                <td class="cpf">{{ $Cliente->cpf }}</td>
                <td class="email">{{ $Cliente->email }}</td>
                <td>
                    <a href="{{ route('Cliente.show', $Cliente->id) }}" class="btn btn-info">Detalhes</a>
                    <a href="{{ route('Cliente.edit', $Cliente->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('Cliente.destroy', $Cliente->id) }}" method="POST" style="display: inline;">
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