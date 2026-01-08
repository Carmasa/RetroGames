@extends('app')
@section('titulo', ' - RetroGame Hub')
@section('contenido')
    <h2>Lista general de juegos</h2>

    <div class="games-grid">
        @foreach($games as $game)
            <article class="game-card">
                <a href="{{ url('/juego/'.$game['id']) }}">
                    <img src="{{ $game['cover'] }}" alt="{{ $game['title'] }}">
                    <h3>{{ $game['title'] }}</h3>
                </a>
            </article>
        @endforeach
    </div>
@endsection
