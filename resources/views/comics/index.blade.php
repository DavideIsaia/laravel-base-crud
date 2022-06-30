@extends('layouts.app')

@section('main_content')
  {{-- http://127.0.0.1:8000/comics --}}
  <div class="container">
    <h1>Lista dei fumetti</h1>
    <ul>
      @foreach ($comics as $comic)
      <li class="my_item">
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
          <span class="my_title">{{ $comic->title }}</span>
        </a>
      </li>          
      @endforeach
    </ul>
  </div>    
@endsection