@extends("layouts.base-layout")

@section("main")
    <div class="container my-5">
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
