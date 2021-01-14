<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>


  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="{{ asset('../css/master.css') }}" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -------------------------------------------->

  @if ( $__env->yieldContent('title') != 'Dashboard' )
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-transparent" />
  @else
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" />
  @endif
  <div class="container">
    <!-- Logo ------------------------------------------>
    <a class="navbar-brand" href="/">Teco<span>Gool<span></i></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lista">Lista</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav mr">

        @if(session('username'))
        <li><a class="nav-link" href="/dashboard">Dashboard <i class="fa fa-tachometer"></i></a></li>
        <li><a class="nav-link" href="/logout">Logout <i class="fa fa-user"></i></a></li>
        @else
        <li><a class="nav-link" href="#">Sign Up <i class="fa fa-user-plus"></i></a></li>
        <li><a class="nav-link" href="/login">Login <i class="fa fa-user"></i></a></li>
        @endif
      </ul>
    </div>
  </div>

  </nav>
  <!-- End Navbar -->

  @yield('content')



  <script src="https://kit.fontawesome.com/527dae40e0.js" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

</body>

</html>