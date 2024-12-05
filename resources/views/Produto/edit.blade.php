<x-app-layout>
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('Produto.update', $Produto->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label class="form-label" for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{old('nome', $Produto->nome) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="descrição">Descricao:</label>
                    <input type="text" id="descrição" name="descrição" value="{{old('descrição', $Produto->descrição) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor_base">Valor base:</label>
                    <input type="text" id="valor_base" name="valor_base" value="{{old('valor_base', $Produto->valor_base) }}" class="form-input">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('Cliente.index') }}" class="btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </section>

</x-app-layout>