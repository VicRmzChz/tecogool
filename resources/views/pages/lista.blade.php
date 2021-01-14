@extends('layouts.master')
@section('title', 'Lista')
<link href="{{ asset('../css/listacustom.css') }}" rel="stylesheet" />

@section('content')
<!-- Buscar Jugador ------------------------------------------------>
<div class="container">
  <form method="GET" action="{{ route('lista.show', 'buscarNombre') }}">
    <div class="input-group pb-3">
      <input type="text" id="buscarNombre" class="form-control" placeholder="Buscar nombre" aria-label="Buscar nombre"
        aria-describedby="button-addon2" name="buscarNombre" required>
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
      </div>
    </div>
    <span>@error('buscarNombre'){{ $message }}@enderror</span>
  </form>
</div> <!-- End Buscar Jugador -->

<!-- Database table ------------->
<div class="table-responsive">
  <table class="table table-hover">
    <thead class="indigo">
      <!-- Table header -->
      <tr class="text-center text-white">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        @foreach($partidos as $partido)

        <th scope="col">{{ $partido->local}} <br> {{ $partido->visitante}} </th>
        @endforeach



        <th scope="col">Puntos</th>
      </tr>
    </thead> <!-- End Table header -->

    <tbody>

      @foreach($clientes as $cliente)
      @foreach($cliente->todasLasQuinelas as $quinela)
      <tr>

        <th scope="row">{{ $quinela->id }}</th>
        <td class="text-left">
          {{$cliente->primer_nombre . ' ' . $cliente->segundo_nombre . ' ' . $cliente->apellido_paterno . ' ' . $cliente->apellido_materno}}
        </td>

        <td>{{$quinela->partido_1}}</td>
        <td>{{$quinela->partido_2}}</td>
        <td>{{$quinela->partido_3}}</td>
        <td>{{$quinela->partido_4}}</td>
        <td>{{$quinela->partido_5}}</td>
        <td>{{$quinela->partido_6}}</td>
        <td>{{$quinela->partido_7}}</td>
        <td>{{$quinela->partido_8}}</td>
        <td>{{$quinela->partido_9}}</td>
        <td>{{$quinela->puntos}}</td>
        @endforeach
        <!-- End $quinela -->
    </tbody>
    @endforeach
    <!-- End $clientes-->
  </table>
</div><!-- End Table -->

<!-- Pagination -->
<div class="d-flex justify-content-center">
  {{ $clientes->links() }}
</div>

@endsection