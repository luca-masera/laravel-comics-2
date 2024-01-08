@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')
    <main>

        <section class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <input type="text" id="title" name="title" placeholder="Inserisci un title" class="form-control">
                <input type="text" id="desciption" name="description" placeholder="Inserisci una description"
                    class="form-control">
                <input type="price" id="price" name="price" placeholder="Inserisci un prezzo" class="form-control">
                <input type="type" id="type" name="type" placeholder="Inserisci un type" class="form-control">
                <button type="submit">Invia</button>
            </form>

        </section>
    </main>
@endsection
