@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="container">
  <h1>Contact</h1>
  {{ session('username') }}
</div>


@endsection