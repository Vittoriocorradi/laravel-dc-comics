@extends('layouts.app')

@section('page-title')
    Crud - Edit Comic
@endsection

@section('page-main')
    <div class="container py-4">
        <a href="{{ route('comics.index') }}" class="btn btn-primary mb-4">Torna alla lista</a>
        <h1>Modifica fumetto</h1>
        <form action="{{ route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $comic->description) }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Fonte immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di pubblicazione</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type) }}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Disegnatore</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists', $comic->artists) }}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittore</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{ old('writers', $comic->writers) }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection