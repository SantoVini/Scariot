<x-app-layout>
    <div class="container">
        <form action="{{ route('Pedido.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Descrição:</span>
                <input type="text" name="descrição" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira Testo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Data do Pedido:</span>
                <input type="text" name="data_pedido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor Total:</span>
                <input type="text" name="valor_total" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Id Cliente:</span>
                <input type="text" name="id_cliente" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" name="id_cliente">
                    ID Cliente
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href=" {{ $Pedido->Cliente->id }}">Action</a></li>
                    <li><a class="dropdown-item" href=" {{ $Pedido->Cliente->id }}">Another action</a></li>
                    <li><a class="dropdown-item" href=" {{ $Pedido->Cliente->id }}">Something else here</a></li>
                </ul>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('Pedido.index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    
</x-app-layout>
