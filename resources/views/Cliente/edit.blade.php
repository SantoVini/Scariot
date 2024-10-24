<x-app-layout>
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('Cliente.update', $Cliente->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label class="form-label" for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{old('nome', $Cliente->nome) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="endereço">Endereço:</label>
                    <input type="text" id="endereço" name="endereço" value="{{old('endereço', $Cliente->enderço) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" value="{{old('cpf', $Cliente->cpf) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email:</label>
                    <input type="text" id="email" name="email" value="{{old('email', $Cliente->email) }}" class="form-input">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route('Cliente.index') }}" class="btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>