@extends('layouts.master')
@section('title', 'Login')
<link href="{{ asset('../css/formstyle.css') }}" rel="stylesheet" />

@section('content')

<div class="login-form">
  <form action="user" method="post" class="form_horizontal">
    @csrf
    <div class="form_icon"><i class="fa fa-user-circle"></i></div>
    <h2 class="text-center">Log in</h2>
    <div class="form-group">
      <span class="input-icon"><i class="fa fa-user"></i></span>
      <input type="text" class="form-control" placeholder="Username" name="username" required="required">
    </div>
    <div class="form-group">
      <span class="input-icon"><i class="fa fa-lock"></i></span>
      <input type="password" class="form-control" placeholder="Password" name="userpass" required="required">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
    <div class="clearfix">
      <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
      <a href="#" class="float-right">Forgot Password?</a>
    </div>
  </form>
  <p class="text-center"><a href="#">Create an Account</a></p>
</div>



@endsection