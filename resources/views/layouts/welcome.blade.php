@extends('home')

@section('content')
    <div class="row">


        @foreach ($movies as $movie)
            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <a class="text-decoration-none text-light d-flex align-items-center justify-center flex-column"
                    href="{{ route('movies.show', ['id' => $movie->id]) }}">

                    <h2 class="text-center py-4">{{ $movie['title'] }}</h2>

                    <div class="gi-img">
                        <img class="img-fluid" src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
