@extends("layouts.base-layout")

@section("main")
    <main>
        <section class="container my-5">
            <h1 class="text-center">Laravel Template</h1>
            <div class="d-flex justify-content-center m-5">
                <img
                    src="{{ Vite::asset("resources/img/duck.jpg") }}"
                    alt="Paperella Laravel Template"
                />
            </div>
        </section>
    </main>
@endsection
