<x-app-layout>
  <link rel="stylesheet" href="{{ asset('resources\css\app.css') }}">
    
  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.instagram.com%2Fscariotlanches%2F&psig=AOvVaw3UDQtNyfqP4Eiu_hbzCBxQ&ust=1733172125236000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLC1g6q3h4oDFQAAAAAdAAAAABAQ" alt="logo" width="100" height="100">
    <h1 class="display-5 fw-bold text-body-emphasis">Scariot</h1>
    <div class="col-lg-6 mx-auto">
      <p class="text-light lead mb-4">Scariot Lanches
                            Restaurante
                            Melhor Xis da região há mais de 5 anos;
                            (54) 3342-5792
                            (54) 99715-5499
                            Terça - Sábado: 11:00-13:00 </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="{{route ('Cliente.index')}}" class="btn btn-primary">Login</a>
        <a href="{{route ('Produto.index')}}" class="btn btn-primary">Pratos</a>
        <a href="{{route ('Pedido.index')}}" class="btn btn-primary">Faça seu Pedido</a>
      </div>
    </div>
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
