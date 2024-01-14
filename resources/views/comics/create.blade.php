@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')
    <main>

        <section class="container">
            <h1>Crea una nuova card</h1>
            <div>
                <a href="{{ route('comics.index') }}">Torna ai comics</a>
            </div>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" placeholder="Inserisci un title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="'invalid-feedback{{ $message }} "></div>
                    @enderror
                </div>
                <div>
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" id="desciption" name="description" cols="20" row="5"
                        placeholder="Inserisci una description" class="form-control"></textarea>
                </div>
                <div>
                    <label for="thumb" class="form-label">Image:</label>
                    <input type="url" id="thumb" name="thumb" placeholder="Inserisci una immagine"
                        class="form-control @error('thumb') is-invalid @enderror">
                    @error('thumb')
                        <div class="'invalid-feedback{{ $message }} "></div>
                    @enderror

                </div>
                <div>
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" id="price" name="price" placeholder="Inserisci un prezzo"
                        class="form-control" required>
                    @error('price')
                        <div class="'invalid-feedback{{ $message }} "></div>
                    @enderror

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
                <button type="reset">Cancella</button>
            </form>

        </section>
    </main>
@endsection
