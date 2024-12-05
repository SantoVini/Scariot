<x-app-layout>
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('Pedido.update', $Pedido->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label class="form-label" for="descrição">Descrição:</label>
                    <input type="text" id="descrição" name="descrição" value="{{old('descrição', $Pedido->descrição) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="data_pedido">Data do Pedido:</label>
                    <input type="text" id="data_pedido" name="data-pedido" value="{{old('data_pedido', $Pedido->data_pedido) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor_total">Valor Total:</label>
                    <input type="text" id="valor_total" name="valor_total" value="{{old('valor_total', $Pedido->valor_total) }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label" for="id_cliente">Id Cliente:</label>
                    <input type="text" id="id_cliente" name="id_cliente" value="{{old('id_cliente', $Pedido->id_cliente) }}" class="form-input">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route('Pedido.index') }}" class="btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </section>

</x-app-layout>
