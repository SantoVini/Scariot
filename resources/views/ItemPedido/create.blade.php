<x-app-layout>
    <div class="container">
        <form action="{{ route('ItemPedido.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Quantidade:</span>
                <input type="text" name="quantidade" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira Testo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor:</span>
                <input type="text" name="valor" nameclass="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">ID Pedido:</span>
                <input type="text" name="id_pedido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">ID Produto:</span>
                <input type="text" name="id_produto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>

            <button type="submit" class="btn btn-sucess">Salvar</button>
            <a href="{{ route('ItemPedido.index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>    
</x-app-layout>
