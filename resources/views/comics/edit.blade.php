@extends('layouts.app')

@section('title', 'Comic Edit')

@section('content')
    <main>

        <section class="container">
            <div>
                <a href="{{ route('comics.index') }}">Torna ai comics</a>
            </div>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" placeholder="Inserisci un title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $comic->title) }}"
                        required>
                </div>
                <div>
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" id="desciption" name="description" cols="20" row="5"
                        placeholder="Inserisci una description" class="form-control"value="{{ old('description', $comic->description) }}"></textarea>
                </div>
                <div>
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" id="price" name="price" placeholder="Inserisci un prezzo"
                        class="form-control" value="{{ old('price', $comic->price) }}" required>

                </div>
                <div>
                    <label for="type" class="form-label">type:</label>
                    <select name="type" id="type" class="form-select" required>
                        <option value="">Tutti</option>
                        <option value="comic book"> comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>

                </div>

                <button type="submit">Invia</button>
                <button type="reset">Reset</button>
            </form>

        </section>
    </main>
@endsection
