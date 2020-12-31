@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<h1>Profile</h1>
<h2>welcome, {{session('username')}}</h2>

<a href="/logout">Logout</a>



@endsection