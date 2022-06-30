<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comics</title>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">DC Comics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
            <a class="nav-link" href="{{route('comics.index')}}">Lista Fumetti</a>
            <a class="nav-link" href="{{route('comics.create')}}">Inserisci Nuovo Fumetto</a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  @yield('main_content')
  
</body>
</html>