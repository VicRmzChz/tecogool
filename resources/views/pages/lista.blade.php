@extends('layouts.master')
@section('title', 'Lista')
<link href="{{ asset('../css/listacustom.css') }}" rel="stylesheet" />
@section('content')

@foreach($listas as $lista)
{{$lista->primer_nombre}}
@endforeach
<p>Lista</p>
@endsection