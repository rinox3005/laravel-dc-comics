@extends("layouts.base-layout")

@section("main")
    <main>
        <section class="container my-5">
            <h1 class="text-center">DC Comics</h1>
            <div class="d-flex justify-content-center m-5">
                <img
                    src="{{ Vite::asset("resources/img/dc-logo.png") }}"
                    alt="Paperella Laravel Template"
                />
            </div>
        </section>
    </main>
@endsection
