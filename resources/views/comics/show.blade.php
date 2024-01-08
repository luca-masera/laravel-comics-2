@extends('layouts.app')
@section('title', 'Film')

@section('content')
    <main>
        <section id="card-show" class="container">
            <h1>Comics</h1>
            <div class="row gy-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <div class="d-flex justify-content-center mt-3 ">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">{{ $comic['title'] }}</h2>
                                <p class="card-text"> {{ $comic['description'] }} </p>
                                <p> {{ $comic['price'] }} </p>
                                <a href="{{ route('home') }}" class="btn btn-danger ">Vedi tutti i comics</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>

    </main>



@endsection
