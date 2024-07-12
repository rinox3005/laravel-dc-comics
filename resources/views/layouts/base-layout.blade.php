<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>DC Comics</title>
        @vite("resources/js/app.js")
    </head>

    <body>
        @include("shared.header")
        <main class="my-3">
            @yield("main")
        </main>
        @include("shared.footer")
    </body>
    {{--
        <img
        src="{{ Vite::asset("resources/img/duck.jpg") }}"
        alt="Paperella Laravel Template"
        />
    --}}
</html>