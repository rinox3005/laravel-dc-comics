@extends("layouts.base-layout")

@section("main")
    <main class="mt-0">
        <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img
                        src="{{ Vite::asset("resources/img/slider3.jpg") }}"
                        class="d-block w-100 h-100"
                        alt="..."
                    />
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img
                        src="{{ Vite::asset("resources/img/slider2.webp") }}"
                        class="d-block w-100 h-100"
                        alt="..."
                    />
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img
                        src="{{ Vite::asset("resources/img/slider4.jpg") }}"
                        class="d-block w-100 h-100"
                        alt="..."
                    />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#homeCarousel"
                data-bs-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#homeCarousel"
                data-bs-slide="next"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
            <h2 class="text-light display-5 fw-semibold my-4 text-center">
                Trending DC Movies
            </h2>
            <div id="moviesCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie1.webp") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Superman Returns</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie2.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Suicide Squad</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie3.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Justice League</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie4.webp") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">The Flash</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie5.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">The Batman</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie6.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Wonder Woman</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie7.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Man of Tomorrow</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie8.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Marvel vs DC</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie9.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Green Lantern</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie10.webp") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Aquaman</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie11.jpg") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Joker</h3>
                                </div>
                            </div>
                            <div class="card">
                                <img
                                    src="{{ Vite::asset("resources/img/movie12.avif") }}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title">Batman & Robin</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#moviesCarousel"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon me-5"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#moviesCarousel"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon ms-5"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
@endsection
