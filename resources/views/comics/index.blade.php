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
  {{-- http://127.0.0.1:8000/comics --}}
  <div class="container">
    <h1>Lista dei fumetti</h1>
    <ul>
      @foreach ($comics as $comic)
      <li class="my_item">
        <a href="">
          <img src="{{ $comic->thumb }}" alt="">
          <span class="my_title">{{ $comic->title }}</span>
        </a>
      </li>          
      @endforeach
    </ul>
  </div>
  
</body>
</html>