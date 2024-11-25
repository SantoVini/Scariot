<x-app-layout>
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('ItemPedido.update', $ItemPedido->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label class="form-label" for="quantidade">Quantidade:</label>
                    <input type="text" id="quantidade" name="quantidade" value="{{old('quantidade', $ItemPedido->quantidade) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="{{old('valor', $ItemPedido->valor) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="id_pedido">ID Pedido:</label>
                    <input type="text" id="id_pedido" name="id_pedido" value="{{old('id_pedido', $ItemPedido->id_pedido) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="id_produto">ID Produto:</label>
                    <input type="text" id="id_produto" name="id_produto" value="{{old('id_produto', $ItemPedido->id_produto) }}" class="form-input">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route('ItemPedido.index') }}" class="btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
