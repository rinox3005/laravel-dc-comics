@extends("layouts.base-layout")

@section("title")
    DC Comics - Add New Comic Book
@endsection

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
            Add new comic book
        </h4>
        <form action="{{ route("comics.store") }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="mb-1" for="title">Title</label>
                <input
                    type="text"
                    class="form-control @error("title") is-invalid @enderror mb-1"
                    id="title"
                    name="title"
                    value="{{ old("title") }}"
                    required
                />
                @error("title")
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-1" for="description">Description</label>
                <textarea
                    class="form-control @error("description") is-invalid @enderror mb-1"
                    id="description"
                    name="description"
                >
{{ old("description") }}</textarea
                >
                @error("description")
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-1" for="thumb">Thumbnail URL</label>
                <input
                    type="text"
                    class="form-control @error("thumb") is-invalid @enderror mb-1"
                    id="thumb"
                    name="thumb"
                    value="{{ old("thumb") }}"
                />
                @error("thumb")
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-1" for="price">Price</label>
                <input
                    type="number"
                    step="0.01"
                    class="form-control @error("price") is-invalid @enderror mb-1"
                    id="price"
                    name="price"
                    value="{{ old("price") }}"
                />
                @error("price")
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-1" for="series">Series</label>
                <input
                    type="text"
                    class="form-control @error("series") is-invalid @enderror mb-1"
                    id="series"
                    name="series"
                    value="{{ old("series") }}"
                />
                @error("series")
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-1" for="sale_date">Sale Date</label>
                <input
                    type="date"
                    class="form-control @error("sale_date") is-invalid @enderror mb-1"
                    id="sale_date"
                    name="sale_date"
                    value="{{ old("sale_date") }}"
                />
                @error("sale_date")
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-1" for="type">Type</label>
                <input
                    type="text"
                    class="form-control @error("type") is-invalid @enderror mb-1"
                    id="type"
                    name="type"
                    value="{{ old("type") }}"
                />
                @error("type")
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-1" for="artists">Artists</label>
                <div id="artists">
                    <input
                        type="text"
                        class="form-control @error("artists") is-invalid @enderror mb-1 mb-2"
                        name="artists"
                        value="{{ old("artists") }}"
                    />
                    @error("artists")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="mb-1" for="writers">Writers</label>
                <div id="writers">
                    <input
                        type="text"
                        class="form-control @error("writers") is-invalid @enderror mb-1 mb-2"
                        name="writers"
                        value="{{ old("writers") }}"
                    />
                    @error("writers")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route("comics.index") }}" class="btn btn-primary">
                    Back
                </a>
                <button type="submit" class="btn btn-primary">
                    Create Comic
                </button>
            </div>
        </form>
    </div>
@endsection
