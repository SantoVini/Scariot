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

    <footer style="background-color: #282828; color: #fff; padding: 20px 0; text-align: center;">
        <div style="margin-bottom: 10px;">
            <p style="margin: 0;">Siga-nos nas redes sociais:</p>
        </div>

        <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 20px;">
            <a href="https://www.facebook.com/p/Scariot-Lanches-100054649591322/" target="_blank" 
            style="display: inline-block; width: 40px; height: 40px; text-decoration: none; background-color: #3b5998; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="width: 24px;">
            </a>
            <a href="https://www.instagram.com/scariotlanches/" target="_blank" 
            style="display: inline-block; width: 40px; height: 40px; text-decoration: none; background-color: #E1306C; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" style="width: 24px;">
            </a>
        
        </div>
        <div style="margin-top: 20px;">
            <p style="margin: 0; font-size: 14px;">&copy; 2024 Seu Site. Todos os direitos reservados.</p>
        </div>
    </footer>
</x-app-layout>
