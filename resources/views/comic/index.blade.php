@extends('layouts.app')

@section('page-title')
    Crud - Comics
@endsection

@section('page-main')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card col-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <div class="card-text">{{ $comic->series }}</div>
                        <div class="card-text">{{ $comic->price }}$</div>
                        <a href="#" class="btn btn-primary mt-2">Vai al dettaglio</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection