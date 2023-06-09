@extends('layout.app')

@section('titlePage') 
    Laravel + PhpMyAdmin
@endsection


@section('contentHome') 
    <div class="mainView">
        <div class="container mb-5 mt-5 grid">
            <div class="row gap-3">
                @foreach ($arrayMovies as $elem )
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $elem['title'] }}</h5>
                                <p class="card-text">{{ $elem['nationality'] }}</p>
                                <p class="card-text">IMDB: <span class="text-warning">{{ $elem['vote'] }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection