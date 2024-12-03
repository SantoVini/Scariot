<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Clientes') }}
        </h2>
    </x-slot>
    <div class="px-4 py-5 my-5 text-center">
        <section class="details">
            <div class="content">
                <div class="meta text-light lead mb-4">
                    <span class="label">ID:</span>
                    <span class="info">{{ $Cliente->id }}</span>
                </div>
                <div class="meta text-light lead mb-4">
                    <span class="label">Nome:</span>
                    <span class="info">{{ $Cliente->nome }}</span>
                </div>
                <div class="meta text-light lead mb-4">
                    <span class="label">CPF:</span>
                    <span class="info">{{ $Cliente->cpf }}</span>
                </div>
                <div class="meta text-light lead mb-4">
                    <span class="label">Email:</span>
                    <span class="info">{{ $Cliente->email }}</span>
                </div>
            </div>
            <a href="{{ route('Cliente.index') }}" class="btn btn-primary">Voltar</a>
        </section>
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