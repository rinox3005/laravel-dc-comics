@extends("layouts.base-layout")

@section("main")
    <div class="container">
        <form action="{{ route("comics.store") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                    required
                />
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    class="form-control"
                    id="description"
                    name="description"
                >
{{ old("description") }}</textarea
                >
            </div>

            <div class="form-group">
                <label for="thumb">Thumbnail URL</label>
                <input
                    type="text"
                    class="form-control"
                    id="thumb"
                    name="thumb"
                />
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input
                    type="number"
                    step="0.50"
                    class="form-control"
                    id="price"
                    name="price"
                />
            </div>

            <div class="form-group">
                <label for="series">Series</label>
                <input
                    type="text"
                    class="form-control"
                    id="series"
                    name="series"
                />
            </div>

            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input
                    type="date"
                    class="form-control"
                    id="sale_date"
                    name="sale_date"
                />
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" />
            </div>

            <div class="form-group">
                <label for="artists">Artists</label>
                <div id="artists">
                    <input
                        type="text"
                        class="form-control mb-2"
                        name="artists"
                    />
                </div>
            </div>

            <div class="form-group">
                <label for="writers">Writers</label>
                <div id="writers">
                    <input
                        type="text"
                        class="form-control mb-2"
                        name="writers"
                    />
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create Comic</button>
        </form>
        <a href="{{ route("comics.index") }}">Torna alla home</a>
    </div>
@endsection
