@extends("layouts.base-layout")

@section("title")
    DC Comics - Comics List
@endsection

@section("main")
    <div>
        <img
            class="comics-banner w-100"
            src="{{ Vite::asset("resources/img/comics-banner.webp") }}"
            alt="comics-banner w-100"
        />
    </div>
    <div class="position-relative container my-5">
        <h4 class="text-uppercase comics-label bg-primary fw-bold text-light">
            Top Sellers
        </h4>
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-lg-2 col-md-4 col-sm-6 text-center">
                    <div class="card h-100">
                        <div class="thumb-container">
                            <a href="{{ route("comics.show", $comic) }}">
                                <img
                                    class="thumb"
                                    src="{{ $comic->thumb }}"
                                    alt="{{ $comic->title }}"
                                />
                            </a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $comic->title }}
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

{{--
    <a href="{{ route("comics.show", $comic) }}">
    
    </a>
--}}
