@php
    $headerdb = config('db.list');
@endphp

<header>
    <div class="container">
        <div class="row align-items-center pt-3">
            <div class="col-12 col-md-4 ">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">

            </div>
            <ul class="nav nav-underline col-12 col-md-8 ">
                @foreach ($headerdb as $element)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $element['url'] }}">
                            {{ $element['text'] }}
                        </a>

                    </li>
                @endforeach

            </ul>
        </div>

    </div>
    <div class="jumbo"></div>
</header>
