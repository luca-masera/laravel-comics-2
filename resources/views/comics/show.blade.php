@extends('layouts.app')
@section('title', 'Film')

@section('content')
    <main>
        <section id="comics-show" class="container">
            <div>
                <h1>{{ $comic->title }}</h1>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-danger ">Modifica prodotto</a>

            </div>

            <div class="row gy-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <div class="d-flex justify-content-center mt-3 ">
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">{{ $comic->title }}</h2>
                                <p class="card-text"> {{ $comic->description }} </p>
                                <p> {{ $comic->type }} </p>
                                <p> {{ $comic->price }} </p>
                                <a href="{{ route('home') }}" class="btn btn-danger ">Vedi tutti i comics</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>

    </main>



@endsection
