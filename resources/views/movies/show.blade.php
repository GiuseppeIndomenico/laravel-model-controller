@extends('home')

@section('content')
    <a href="{{ route('layouts.welcome') }}">
        <button class="btn btn-outline-danger">indietro</button>
    </a>
    <div class="container">
        <div class="row py-4">
            <h1 class="fw-bold text-center display-5 mb-4">{{ $movies['title'] }}</h1>
            <div class="col-6 mb-4 gi-img-show">
                <img class="img-fluid" src="{{ $movies['image'] }}" alt="{{ $movies['title'] }}">
            </div>
            <div class="col-6 mb-4">
                <p>Data di uscita: <span class="fw-semibold"> {{ $movies['date'] }} </span></p>
                <p>Voto: <span class="fw-semibold"> {{ $movies['vote'] }} </span></p>
                <p>origine: <span class="fw-semibold"> {{ $movies['nationality'] }} </span></p>
            </div>
        </div>


    </div>
@endsection
