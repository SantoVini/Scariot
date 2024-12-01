<x-app-layout>
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('Item_pedido.update', $Item_pedido->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label class="form-label" for="quantidade">Quantidade:</label>
                    <input type="text" id="quantidade" name="quantidade" value="{{old('quantidade', $Item_pedido->quantidade) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="{{old('valor', $Item_pedido->valor) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="id_pedido">ID Pedido:</label>
                    <input type="text" id="id_pedido" name="id_pedido" value="{{old('id_pedido', $Item_pedido->id_pedido) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="id_produto">ID Produto:</label>
                    <input type="text" id="id_produto" name="id_produto" value="{{old('id_produto', $Item_pedido->id_produto) }}" class="form-input">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route('Item_pedido.index') }}" class="btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
