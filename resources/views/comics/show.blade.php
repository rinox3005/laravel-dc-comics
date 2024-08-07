@extends("layouts.base-layout")

@section("title")
    DC Comics - {{ $comic->title }}
@endsection

@section("main")
    <div class="text-light container my-5">
        <div class="row">
            <div class="col-md-4">
                <img
                    src="{{ $comic->thumb }}"
                    alt="{{ $comic->title }}"
                    class="img-fluid"
                />
            </div>
            <div class="col-md-8">
                <h1>{{ $comic->title }}</h1>
                <p>{{ $comic->description }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-light">
                        <strong>Price:</strong>
                        {{ $comic->price }}
                    </li>
                    <li class="list-group-item bg-dark text-light">
                        <strong>Series:</strong>
                        {{ $comic->series }}
                    </li>
                    <li class="list-group-item bg-dark text-light">
                        <strong>Sale Date:</strong>
                        {{ Carbon::parse($comic->sale_date)->format("d/m/Y") }}
                    </li>
                    <li class="list-group-item bg-dark text-light">
                        <strong>Type:</strong>
                        {{ ucwords($comic->type) }}
                    </li>
                    <li class="list-group-item bg-dark text-light">
                        <strong>Artists:</strong>
                        @foreach (json_decode($comic->artists) as $artist)
                            <span>{{ $artist }}</span>
                            @if (! $loop->last)
                                ,
                            @endif
                        @endforeach
                    </li>
                    <li class="list-group-item bg-dark text-light">
                        <strong>Writers:</strong>
                        @foreach (json_decode($comic->writers) as $writer)
                            <span>{{ $writer }}</span>
                            @if (! $loop->last)
                                ,
                            @endif
                        @endforeach
                    </li>
                </ul>
                <div class="d-flex align-center">
                    <a
                        href="{{ route("comics.index") }}"
                        class="btn btn-primary me-2 mt-3"
                    >
                        Back
                    </a>
                    <a
                        href="{{ route("comics.edit", $comic->id) }}"
                        class="btn btn-primary me-2 mt-3"
                    >
                        Edit
                    </a>
                    <!-- Modal Button -->
                    <button
                        type="button"
                        class="btn btn-outline-danger mt-3"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                    >
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        id="deleteModal"
        tabindex="-1"
        aria-labelledby="deleteModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-body">
                    <h5>Delete Confirmation:</h5>
                    <p>Are you sure you want to delete {{ $comic->title }}?</p>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <form
                        action="{{ route("comics.destroy", $comic->id) }}"
                        method="POST"
                    >
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-danger">
                            Confirm Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
