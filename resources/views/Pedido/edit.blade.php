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
                    <label class="form-label" for="descricao">Descricao:</label>
                    <input type="text" id="descricao" name="descricao" value="{{old('descricao', $Produto->descricao) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor_base">Valor base:</label>
                    <input type="text" id="valor_base" name="valor_base" value="{{old('valor_base', $Produto->valor_base) }}" class="form-input">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route('Pedido.index') }}" class="btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>