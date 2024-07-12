<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Add New Comic</title>
        @vite("resources/js/app.js")
    </head>

    <body>
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
                        value="{{ old("title") }}"
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
                        value="{{ old("thumb") }}"
                    />
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input
                        type="number"
                        step="0.01"
                        class="form-control"
                        id="price"
                        name="price"
                        value="{{ old("price") }}"
                    />
                </div>

                <div class="form-group">
                    <label for="series">Series</label>
                    <input
                        type="text"
                        class="form-control"
                        id="series"
                        name="series"
                        value="{{ old("series") }}"
                    />
                </div>

                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input
                        type="date"
                        class="form-control"
                        id="sale_date"
                        name="sale_date"
                        value="{{ old("sale_date") }}"
                    />
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input
                        type="text"
                        class="form-control"
                        id="type"
                        name="type"
                        value="{{ old("type") }}"
                    />
                </div>

                <div class="form-group">
                    <label for="artists">Artists</label>
                    <div id="artists">
                        <input
                            type="text"
                            class="form-control mb-2"
                            name="artists"
                            value="{{ old("artists.0") }}"
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
                            value="{{ old("writers.0") }}"
                        />
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    Create Comic
                </button>
            </form>
        </div>
        <a href="{{ route("comics.index") }}">Torna alla home</a>
    </body>
</html>
