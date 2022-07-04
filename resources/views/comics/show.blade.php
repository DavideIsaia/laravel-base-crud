@extends('layouts.app')

@section('main_content')
    <div class="container">
      <h1>Dettagli fumetto</h1>
      <ul>
        <li class="my_item">
          <h2 class="my_title">{{ $current_comic->title }}</h2>
          <img src="{{ $current_comic->thumb }}" alt="{{ $current_comic->title }}">
          <p>{{ $current_comic->description }}</p>
          <span>Serie: {{ $current_comic->series }} | </span>
          <span>Tipo: {{ $current_comic->type }}</span> 
          <h5>Data di uscita: {{\Carbon\Carbon::parse($current_comic->sale_date)->format('d/M/Y')}}</h5>            
          <h4>Prezzo: {{ $current_comic->price }}$</h4>      
        </li>          
      </ul>
      <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $current_comic->id]) }}">Modifica</a>
    </div>  
@endsection