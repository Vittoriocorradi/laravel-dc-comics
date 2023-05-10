@extends('layouts.app')

@section('page-title')
    Crud - Comic Detail
@endsection

@section('page-main')
    <div class="container py-4">
        <a href="{{ route('comics.index') }}" class="btn btn-primary mb-4">Torna alla lista</a>
        <div>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <div class="row">
            <div class="col-10">
                <h2>Info</h2>
                <div class="row">
                    <div class="col-6">
                        <div>Prezzo: {{ $comic->price }}$</div>
                        <div>Serie: {{ $comic->series }}</div>
                        <div>Tipo: {{ $comic->type }}</div>
                        <div>Data di pubblicazione: {{ \Carbon\Carbon::parse($comic->sale_date)->locale('it_IT')->isoFormat('d MMMM YYYY') }}</div>
                    </div>
                    <div class="col-6">
                        <div>Disegnatore: {{ $comic->artists }}</div>
                        <div>Scrittore: {{ $comic->writers }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection