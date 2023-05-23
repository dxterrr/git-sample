<html>
    <head>
        <title>@yield ('title') -Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('storage/css/stylee.css') ?>">
        
    </head>
    <body>
        <div class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">|||||
        
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route ('img') }}">Image</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route ('log') }}">Log-in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route ('tab') }}">Data Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route ('list') }}">Data List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
        @yield('content')
    </body>
</html>