@extends('layouts.layout')
@section('content')
<br><div class="card-deck">
  <div class="card">
    <img src="{{asset('/imagenes/f.jpg')}}" class="card-img-top" alt="" width="" height="" >
    <div class="card-body">
      <h5 class="card-title">Comedores extensibles</h5>
      <p class="card-text">Estos comedores cuentan con una extensión que se puede sacar para ampliar la mesa cuando la
         necesites. Estas mesas son perfectas para ahorrar espacio pero también para acoger a todos tus invitados.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-warning inputSubmit">
      <a class="nav-link" href="../resources/views/usuario/compra.blade.php">comprar<span class="sr-only"></span></a>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('/imagenes/g.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Comedores auxiliares</h5>
      <p class="card-text">Este tipo de comedor ocupa por lo general poco espacio,
         son usualmente tipo barra con 2 puestos, ideales para lugares reducidos. 
         Si vives en una casa o apartamento pequeño, éste es el comedor 
        ideal para ti ya que ahorrarás y le darás mucho estilo a tu espacio.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-warning inputSubmit"> <li class="nav-item">
        <a class="nav-link" href="../resources/views/usuario/compra.blade.php">comprar<span class="sr-only"></span></a>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('/imagenes/h.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Comedores de diseño</h5>
      <p class="card-text">Para darle un toque único y especial a tu comedor, 
        podrás optar por los colores vivos en las sillas y los estampados modernos en el vidrio. 
        ¡Mucho estilo en tu hogar!
</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-warning inputSubmit"> <li class="nav-item">
        <a class="nav-link" href="../resources/views/usuario/compra.blade.php">comprar<span class="sr-only"></span></a>
      </li></button> 
    </div>
  </div>
</div>




@endsection
