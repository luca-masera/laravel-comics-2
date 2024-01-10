@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')
    <main>

        <section class="container">
            <h1>Crea una nuova card</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>


                </div>

            @endif
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" placeholder="Inserisci un title" class="form-control">
                </div>
                <div>
                    <label for="description" class="form-label">Description</label>
                    <input type="text" id="desciption" name="description" cols="20" row="5"
                        placeholder="Inserisci una description" class="form-control">
                </div>
                <div>
                    <label for="price" class="form-label">Price:</label>
                    <input type="price" id="price" name="price" placeholder="Inserisci un prezzo"
                        class="form-control">

                </div>
                <div>
                    <label for="type" class="form-label">type:</label>
                    <input type="text" id="type" name="type" placeholder="Inserisci un type"
                        class="form-control">

                </div>


                <button type="submit">Invia</button>
            </form>

        </section>
    </main>
@endsection
