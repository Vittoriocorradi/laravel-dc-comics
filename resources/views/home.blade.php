@extends('layouts.app')

@section('page-title')
    Crud - Home
@endsection

@section('page-main')
    <h1>Home</h1>
    <a href="{{ route('comics.index') }}" class="btn btn-primary mb-4">Vai alla lista fumetti</a>
@endsection