@extends('layouts.master')
@section('title', 'TecoGool - Inicio')
<link href="{{ asset('../css/custom.css') }}" rel="stylesheet" />
@section('content')

<!--div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="content">
        <h1 class="display-1">Teco<span>Gool<span></h1>
        <h3>Juega y Gana</h3>
        <hr>
        <a class="btn btn btn-outline-secondary text-white btn-lg" href="/lista">Ver Lista</a>
      </div>
    </div>
  </div>
</div-->

<!--div class="jumbotron bg-transparent text-center text-white bg-dark">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <h1 class="display-4">teco<span>gool<span></h1>
        <h3 class="lead">Pasion por el deporte</h3>
        <hr class="my-4">
        <a class="btn btn-outline-secondary btn-lg text-white" href="/lista" role="button">Ver Lista</a>
      </div>
    </div>
  </div>
</div-->


<div class="container">
  <div class="row align-items-center">
    <div class="col-lg-12">
      <div id="content">
        <h1 class="display-1" id="tecoSize">Teco<span>Gool</span></h1>
        <h3>Juega y Gana</h3>
        <hr class="my-4">
        <a class="btn btn-outline-danger text-white btn-lg" href="/lista">Ver Lista</a>
      </div>
    </div>
  </div>
</div>



@endsection