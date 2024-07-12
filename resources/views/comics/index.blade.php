@extends("layouts.base-layout")

@section("main")
    <div class="container">
        <h1>Comics Available</h1>
        <a href="{{ route("comics.create") }}">Add new comic book</a>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route("comics.show", $comic) }}">
                        {{ $comic->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
