<x-app-layout>
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('Cliente.update', $Cliente->id) }}">
                @csrf
                @method('PUT')
                
                <div class="input-group mb-3">
                    <label class="input-group-text" id="inputGroup-sizing-default" for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{old('nome', $Cliente->nome) }}" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" id="inputGroup-sizing-default"for="endereço">Endereço:</label>
                    <input type="text" id="endereço" name="endereço" value="{{old('endereço', $Cliente->endereço) }}" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" id="inputGroup-sizing-default" for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" value="{{old('cpf', $Cliente->cpf) }}" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" id="inputGroup-sizing-default" for="email">Email:</label>
                    <input type="text" id="email" name="email" value="{{old('email', $Cliente->email) }}" class="form-control">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('Cliente.index') }}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </section>

</x-app-layout>