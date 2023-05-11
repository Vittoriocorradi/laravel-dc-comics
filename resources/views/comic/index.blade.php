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
                        <input type="Button" value="Cancella" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Modale per cancellazione --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina Fumetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Attento! Stai per cancellare il fumetto. Sei sicuro di voler procedere?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Indietro</button>
                    <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Procedi con la cancellazione" class="btn btn-danger">
                    </form>
            </div>
        </div>
    </div>
@endsection