
@extends('layouts.layout')
@section('content')
<form method="POST" action="{{ route('login') }}">
<div class="contaiber p4">
    <div class='row'>
        <div class="col-md-4">
            <div class="card-body">

<div style="text-align:center;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">valor</th>
      <th scope="col">compra</th>

      </tr>
  </thead>
  <tbody>
      @foreach ($usuarios as $user)
    <tr>
      <th scope="row">{{$user->nombre}}</th>
      <td>{{$user->valor}}</td>
      <td>{{$user->compra}}</td>
      
    </tr>
    @endforeach
</form>    
  </tbody>
</table>
</div>
{{$usuarios->links()}}
            </div>
        </div>

@endsection