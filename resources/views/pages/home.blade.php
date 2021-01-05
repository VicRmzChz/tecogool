@extends('layouts.master')
@section('title', 'TecoGool - Inicio')
<!--link href="asset'../css/custommmmm.css'" rel="stylesheet" /-->

@section('content')


<div class="container-fluid maincontent">
  <div class="row">
    <div class="col-md-8 offset-md-2 info">
      <h1 class="text-center">teco<span class="goolcoler">gool</span></h1>
      <p class="text-break text-center">Estas listo para participar?
      </p>
      <a class="btn btn-md text-center" href="/lista">Ver Lista</a>
    </div>
  </div><!-- End row -->
</div><!-- End container -->


@endsection