@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <div class="movie-row">
                @foreach ($movies as $movie)
                    <div class="movie-col">
                        <div class="card">
                            <h4 class="title">{{$movie['title']}}</h4>
                            <div>
                                <h6 class="original-title">Titolo originale: {{$movie['original_title']}}</h6>
                                <p class="nationality">Nazionalità: {{$movie['nationality']}}</p>
                                <p class="date">Data: {{$movie['date']}}</p>
                                <p class="vote">Voto: {{$movie['vote']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection