@extends('layouts.app')

@section('title', 'Comic Edit')

@section('content')
    <main>

        <section class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" placeholder="Inserisci un title" class="form-control"
                        value="{{ $comic->id }}">
                </div>
                <div>
                    <label for="description" class="form-label">Description</label>
                    <input type="text" id="desciption" name="description" cols="20" row="5"
                        placeholder="Inserisci una description" class="form-control"value="{{ $comic->id }}">
                </div>
                <div>
                    <label for="price" class="form-label">Price:</label>
                    <input type="price" id="price" name="price" placeholder="Inserisci un prezzo"
                        class="form-control" value="{{ $comic->id }}">

                </div>

                <button type="submit">Invia</button>
            </form>

        </section>
    </main>
@endsection
