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