<x-app-layout>
    <div class="container">
        <form action="{{ route('Produto.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome:</span>
                <input type="text" name="nome" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Insira Texto">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Descrição:</span>
                <input type="text" name="descrição" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Insira Texto">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Valor base:</span>
                <input type="text" name="valor_base" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Insira Texto">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('Produto.index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    
</x-app-layout>