@extends('layouts.app')

@section('page-title')
    Crud - Comics
@endsection

@section('page-main')
    <div class="container">
        <h1>Lista fumetti</h1>
        <a href="{{ route('comics.create')}}" class="btn btn-primary mb-3">Aggiungi un fumetto</a>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card col-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <div class="card-text">{{ $comic->series }}</div>
                        <div class="card-text">{{ $comic->price }}$</div>
                        <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary mt-2">Vai al dettaglio</a>
                        <a href="{{ route('comics.edit', $comic->id)}}" class="btn btn-primary mt-2">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Cancella" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection