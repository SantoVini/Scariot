<x-app-layout>
    <div class="container">
        <form action="{{ route('Cliente.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira Testo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Endereço</span>
                <input type="text" name="endereço" nameclass="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">CPF</span>
                <input type="text" name="cpf" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            
            <button type="submit" class="btn btn-sucess">Salvar</button>
            <a href="{{ route('Cliente.index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>    
</x-app-layout>