@extends("layouts.base-layout")

@section("main")
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <a href="{{ route("comics.index") }}">Torna alla home</a>
    </div>
@endsection
