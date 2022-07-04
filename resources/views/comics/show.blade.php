@extends('layouts.app')

@section('main_content')
    <div class="container">
      <h1>Dettagli fumetto</h1>
      <div>
        <h2 class="my_title">{{ $current_comic->title }}</h2>
        <img src="{{ $current_comic->thumb }}" alt="{{ $current_comic->title }}">
        <p>{{ $current_comic->description }}</p>
        <span>Serie: {{ $current_comic->series }} | </span>
        <span>Tipo: {{ $current_comic->type }}</span> 
        <h5>Data di uscita: {{\Carbon\Carbon::parse($current_comic->sale_date)->format('d/M/Y')}}</h5>            
        <h4>Prezzo: {{ $current_comic->price }}$</h4>      
      </div>          
      <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $current_comic->id]) }}">Modifica</a>
      <form class="d-inline-block" action="{{ route('comics.destroy', [ 'comic' => $current_comic->id ]) }}" method="post" onClick="return confirm('Sei sicuro?');">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Cancella</button>
      </form>
    </div>  
@endsection