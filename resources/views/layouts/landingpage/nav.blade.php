<nav class="navbar navbar-expand-lg bg-blue-900 navbar-dark shadow fixed-top">
    <div class="container">
        <a
            class="navbar-brand text-blue-300 font-roboto font-semibold text-uppercase fs-18"
            href="#"
            >Lazuardi<i class="bi bi-activity"></i>code</a
        >
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::is('/*') ? 'active' : '' }}  text-uppercase text-blue-200 font-semibold fs-14"
                        aria-current="page"
                        href="/"
                        >Home</a
                    >
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle text-uppercase text-blue-200 font-semibold fs-14"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ auth()->user()->name }}
                    </a>
                    <ul
                        class="dropdown-menu bg-blue-50 dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li>
                            <a class="dropdown-item text-blue-700" href="#"
                                >profil</a
                            >
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button
                                    type="submit"
                                    class="dropdown-item text-blue-700"
                                >
                                    <i class="bi bi-box-arrow-left"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::is('login*') ? 'active' : '' }} text-uppercase text-blue-200 font-semibold fs-14"
                        href="/login"
                        ><i class="bi bi-arrow-bar-left"></i> Login</a
                    >
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
