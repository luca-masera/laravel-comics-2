@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>

        <section class="container">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-3 my-3 ">
                        <div class="card">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h2 class="card-title">{{ $comic->title }}</h2>
                                <p class="card-text"> {!! substr($comic->description, 0, 100) . '....' !!} </p>
                                <p> {{ $comic->price }} </p>
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary ">Vedi le
                                    specifiche</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ">Cancella</button>

                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
@endsection
