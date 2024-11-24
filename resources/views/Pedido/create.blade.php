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
                <input type="text" name="data_pedido" nameclass="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor Total:</span>
                <input type="text" name="valor_total" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Id Cliente:</span>
                <input type="text" name="id_cliente" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>

            <button type="submit" class="btn btn-sucess">Salvar</button>
            <a href="{{ route('Pedido.index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>    
</x-app-layout>
