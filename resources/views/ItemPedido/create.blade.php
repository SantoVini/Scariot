<x-app-layout>
    <div class="container">
        <form action="{{ route('Produto.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
                <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira Testo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Descrição:</span>
                <input type="text" name="descricao" nameclass="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor base:</span>
                <input type="text" name="valor_base" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>

            <button type="submit" class="btn btn-sucess">Salvar</button>
            <a href="{{ route('Produto.index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>    
</x-app-layout>