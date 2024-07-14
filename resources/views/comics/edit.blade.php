@extends("layouts.base-layout")

@section("main")
    <div class="create-container">
        <img
            class="create-banner w-100"
            src="{{ Vite::asset("resources/img/create-banner.jpg") }}"
            alt="create-banner w-100"
        />
    </div>
    <div
        class="form-style position-relative text-light fw-semibold container my-4 px-4 py-4"
    >
        <h4 class="text-uppercase comics-label bg-primary fw-bold text-light">
            Edit Comic Book
        </h4>
        <form action="{{ route("comics.update", $comic->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label class="mb-1" for="title">Title</label>
                <input
                    type="text"
                    class="form-control mb-1"
                    id="title"
                    name="title"
                    value="{{ $comic->title }}"
                    required
                />
            </div>

            <div class="form-group">
                <label class="mb-1" for="description">Description</label>
                <textarea
                    class="form-control mb-1"
                    id="description"
                    name="description"
                >
{{ $comic->description }}</textarea
                >
            </div>

            <div class="form-group">
                <label class="mb-1" for="thumb">Thumbnail URL</label>
                <input
                    type="text"
                    class="form-control mb-1"
                    id="thumb"
                    name="thumb"
                    value="{{ $comic->thumb }}"
                />
            </div>

            <div class="form-group">
                <label class="mb-1" for="price">Price</label>
                <input
                    type="number"
                    step="0.01"
                    class="form-control mb-1"
                    id="price"
                    name="price"
                    value="{{ $comic->price }}"
                />
            </div>

            <div class="form-group">
                <label class="mb-1" for="series">Series</label>
                <input
                    type="text"
                    class="form-control mb-1"
                    id="series"
                    name="series"
                    value="{{ $comic->series }}"
                />
            </div>

            <div class="form-group">
                <label class="mb-1" for="sale_date">Sale Date</label>
                <input
                    type="date"
                    class="form-control mb-1"
                    id="sale_date"
                    name="sale_date"
                    value="{{ $comic->sale_date }}"
                />
            </div>

            <div class="form-group">
                <label class="mb-1" for="type">Type</label>
                <input
                    type="text"
                    class="form-control mb-1"
                    id="type"
                    name="type"
                    value="{{ $comic->type }}"
                />
            </div>

            <div class="form-group">
                <label class="mb-1" for="artists">Artists</label>
                <div id="artists">
                    <input
                        type="text"
                        class="form-control mb-1 mb-2"
                        name="artists"
                        value="{{ implode(", ", json_decode($comic->artists, true)) }}"
                    />
                </div>
            </div>

            <div class="form-group">
                <label class="mb-1" for="writers">Writers</label>
                <div id="writers">
                    <input
                        type="text"
                        class="form-control mb-1 mb-2"
                        name="writers"
                        value="{{ implode(", ", json_decode($comic->writers, true)) }}"
                    />
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route("comics.index") }}" class="btn btn-primary">
                    Back
                </a>
                <button type="submit" class="btn btn-primary">
                    Update Comic
                </button>
            </div>
        </form>
    </div>
@endsection
