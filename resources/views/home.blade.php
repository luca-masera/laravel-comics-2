@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>

        <section class="container">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($products as $key => $items)
                    <div class="col-12 col-md-4 col-lg-3 my-3 ">
                        <div class="card">
                            <img src="{{ $items['thumb'] }}" alt="{{ $items['title'] }}">
                            <div class="card-body">
                                <h2 class="card-title">{{ $items['title'] }}</h2>
                                <p class="card-text"> {!! substr($items['description'], 0, 100) . '....' !!} </p>
                                <p> {{ $items['price'] }} </p>
                                <a href="{{ route('comics.show', $key) }}" class="btn btn-danger ">Vedi le specifiche</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <div class="height-blu ">
            <ul class="d-flex padding align-items-center">
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span>

                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span>SHOP LOCATOR</span>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span>SUBSCRIPTIONS</span>
                </li>




            </ul>

        </div>
    </main>

@endsection
