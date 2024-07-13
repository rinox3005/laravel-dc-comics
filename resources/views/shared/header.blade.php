<nav class="navbar navbar-expand-lg bg-body-tertiary fw-bold">
    <div class="d-flex justify-content-between container">
        <a class="navbar-brand" href="/">
            <img
                class="nav-logo"
                src="{{ Vite::asset("resources/img/dc-logo.png") }}"
                alt="nav-logo"
            />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0 mb-2 me-auto">
                <li class="nav-item pe-3">
                    <a
                        class="nav-link text-uppercase"
                        aria-current="page"
                        href="#"
                    >
                        Characters
                    </a>
                </li>

                <li class="nav-item dropdown pe-3">
                    <a
                        class="nav-link text-uppercase dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Comics
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route("comics.index") }}"
                            >
                                Comics List
                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route("comics.create") }}"
                            >
                                Add New Comic
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Edit Comic</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Delete Comic</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">Movies</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">TV</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">Games</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">Collectibles</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">Videos</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">Fans</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">News</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-uppercase" href="#">Shop</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
