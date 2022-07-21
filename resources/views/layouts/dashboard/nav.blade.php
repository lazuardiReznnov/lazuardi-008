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
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }} text-uppercase text-blue-200 font-semibold fs-14"
                        href="/dashboard/about"
                        >About</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ Request::is('dashboard/contac*') ? 'active' : '' }} text-uppercase text-blue-200 font-semibold fs-14"
                        href="/dashboard/contac"
                        >contac Us</a
                    >
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle text-uppercase text-blue-200 font-semibold fs-14"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Username
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
                            <a class="dropdown-item text-blue-700" href="#"
                                >Log Out</a
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
