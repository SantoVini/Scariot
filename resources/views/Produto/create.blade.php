<x-app-layout>
    <div class="container">
        <form action="{{ route('Produto.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome:</span>
                <input type="text" name="nome" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Insira Texto">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Descrição:</span>
                <input type="text" name="descrição" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Insira Texto">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Valor base:</span>
                <input type="text" name="valor_base" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Insira Texto">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('Produto.index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    
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