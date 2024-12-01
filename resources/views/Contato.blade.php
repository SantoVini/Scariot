<x-app-layout>
    
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="C:public\Imagens\icon Scariot Lanches.png" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold text-body-emphasis">Scariot</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Scariot Lanches
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
</x-app-layout>
