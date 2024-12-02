<x-app-layout>
    <div class="container">
        <form action="{{ route('Cliente.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira Testo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Endereço</span>
                <input type="text" name="endereço" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">CPF</span>
                <input type="text" name="cpf" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
            </div>
            
            <button type="submit" class="btn btn-sucess">Salvar</button>
            <a href="{{ route('Cliente.index') }}" class="btn btn-secondary">Cancelar</a>
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