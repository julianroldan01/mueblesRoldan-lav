@extends('usuario.navegador')
@section('card')
<button type="button" class="btn btn-warning btn-lg">Chifonier</button>
<button type="button" class="btn btn-warning btn-lg">Mesas</button>
<button type="button" class="btn btn-warning btn-lg">Comedores</button>
<br>
<br><div class="card-deck">
  <div class="card">
    <img src="{{asset('/imagenes/Muebles.jpg')}}" class="card-img-top" alt="" width="" height="" >
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-warning inputSubmit" type="submit">Comprar</button>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('/imagenes/images.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-warning inputSubmit" type="submit">Comprar</button>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('/imagenes/Comedor.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-warning inputSubmit" href=""type="submit">Comprar</button> 
    </div>
  </div>
</div>
@endsection
