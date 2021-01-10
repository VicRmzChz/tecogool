@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')


<div class="container">
  {{ session('username')}}
</div>


@endsection