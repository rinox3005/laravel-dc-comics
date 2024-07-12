<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
    <div class="d-flex justify-content-between container">
        <a class="navbar-brand" href="/">
            <img
                class="nav-logo"
                src="{{ Vite::asset("resources/img/dc-logo.png") }}"
                alt="Paperella Laravel Template"
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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        Characters
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Collectibles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
