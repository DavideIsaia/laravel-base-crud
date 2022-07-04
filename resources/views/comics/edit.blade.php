@extends('layouts.app')

@section('main_content')
<div class="container">
  <h1>Modifica informazioni fumetto</h1>

  <form action="{{ route('comics.update', ['comic' => $current_comic->id]) }}" method="post" class="row g-3">
    @csrf
    @method('put')

    <div class="col-12 mb-3">
      <label for="title" class="form-label">Titolo (Max 100 caratteri)</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="col-12 mb-3">
      <label for="thumb" class="form-label">Link Immagine</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="col-md-3 mb-3">
      <label for="price" class="form-label">Prezzo (Max 999999.99)</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="col-md-3 mb-3">
      <label for="series" class="form-label">Serie (Max 50 caratteri)</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="col-md-3 mb-3">
      <label for="sale_date" class="form-label">Data di vendita (YYYY-MM-DD)</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="col-md-3 mb-3">
      <label for="type" class="form-label">Tipologia fumetto (Max 30 caratteri)</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>
    <div class="col-12 mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea type="text" class="form-control" id="description" name="description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

</div>
@endsection