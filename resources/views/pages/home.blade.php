@extends('layouts.master')
@section('title', 'Home')
<link href="{{ asset('../css/custom.css') }}" rel="stylesheet" />
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="content">
        <h1 class="display-1">TecoGool</h1>
        <h3>Juega y Gana </h3>
        <hr>
        <a class="btn btn-primary btn-lg" href="/lista">Ver Lista</a>
      </div>
    </div>
  </div>
</div>


@endsection