@extends('layouts.master')
@section('title', 'Lista')
<link href="{{ asset('../css/listacustom.css') }}" rel="stylesheet" />
@section('content')

<div class="container pt-3">
  <form action="lista" method="POST">
    @csrf
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Buscar nombre" aria-label="Buscar nombre"
        aria-describedby="button-addon2" name="buscarNombre"'>
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
      </div>
    </div>
  </form>
</div>
<!--div class="container"-->
<div class="table-responsive">
  <table class="table table-hover">
    <thead class="indigo">
      <!--class="thead-dark" -->
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Cruz Azul <br> America</th>
        <th scope="col">Puntos</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clientes as $cliente)
      <tr>
        <th scope="row">{{ $cliente->id}}</th>
        <td class="text-left">
          {{$cliente->primer_nombre . ' ' . $cliente->segundo_nombre . ' ' . $cliente->apellido_paterno . ' ' . $cliente->apellido_materno}}
        </td>
        <td>{{$cliente->partido_1}}</td>
        <td>{{$cliente->partido_2}}</td>
        <td>{{$cliente->partido_3}}</td>
        <td>{{$cliente->partido_4}}</td>
        <td>{{$cliente->partido_5}}</td>
        <td>{{$cliente->partido_6}}</td>
        <td>{{$cliente->partido_7}}</td>
        <td>{{$cliente->partido_8}}</td>
        <td>{{$cliente->partido_9}}</td>
        <td>{{$cliente->puntos}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

<div class="d-flex justify-content-center">
  {{$clientes->links()}}
</div>
</div>
@endsection