<aside class="mt-1">
    <h2 class="fs-18 ms-2 my-2"><i class="bi bi-house-door"></i> DASHBOARD</h2>
    <hr />
    <!-- Admin authoritas -->
    @can('admin')
    <h3 class="fs-14 ms-2 my-2 text-uppercase">
        <i class="bi bi-tools"></i>Administrator
    </h3>
    <ul class="nav flex-column ms-2">
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-hover text-blue-200 font-semibold text-uppercase active fs-12 {{ Request::is('/dashboard/user*') ? 'active' : '' }}"
                aria-current="page"
                href="/dashboard/user"
                ><i class="bi bi-person"></i> User Management</a
            >
        </li>
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-blue-200 font-semibold text-uppercase fs-12 text-hover {{ Request::is('/dashboard/dashboardabout*') ? 'active' : '' }}"
                href="/dashboard/about"
                ><i class="bi bi-link"></i> About Management</a
            >
        </li>
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-blue-200 font-semibold text-uppercase fs-12 text-hover"
                href="#"
                ><i class="bi bi-link"></i> Module Management</a
            >
        </li>
    </ul>
    @endcan
    <!-- Admin authoritas -->

    <h3 class="fs-14 ms-2 my-2 text-uppercase">
        <i class="bi bi-list-ul"></i> product
    </h3>
    <ul class="nav flex-column ms-2">
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-hover text-blue-200 font-semibold text-uppercase active fs-12"
                aria-current="page"
                href="#"
                ><i class="bi bi-tag"></i> category</a
            >
        </li>
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-blue-200 font-semibold text-uppercase fs-12 text-hover"
                href="#"
                ><i class="bi bi-bag-fill"></i> product</a
            >
        </li>
    </ul>
    <h3 class="fs-14 ms-2 my-2 text-uppercase">
        <i class="bi bi-list-ul"></i>Transaction
    </h3>
    <ul class="nav flex-column ms-2">
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-hover text-blue-200 font-semibold text-uppercase active fs-12"
                aria-current="page"
                href="#"
                ><i class="bi bi-tag"></i> Report Order</a
            >
        </li>
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-blue-200 font-semibold text-uppercase fs-12 text-hover"
                href="#"
                ><i class="bi bi-bag-fill"></i> Fintect</a
            >
        </li>
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-blue-200 font-semibold text-uppercase fs-12 text-hover"
                href="#"
                ><i class="bi bi-bag-fill"></i> Cashflow</a
            >
        </li>
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-blue-200 font-semibold text-uppercase fs-12 text-hover"
                href="#"
                ><i class="bi bi-bag-fill"></i> Fee</a
            >
        </li>
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-blue-200 font-semibold text-uppercase fs-12 text-hover"
                href="#"
                ><i class="bi bi-bag-fill"></i> Order</a
            >
        </li>
    </ul>
    <h3 class="fs-14 ms-2 my-2 text-uppercase">
        <i class="bi bi-list-ul"></i> Costumer
    </h3>
    <ul class="nav flex-column ms-2">
        <li class="nav-item bg-hover">
            <a
                class="nav-link text-hover text-blue-200 font-semibold text-uppercase active fs-12"
                aria-current="page"
                href="#"
                ><i class="bi bi-tag"></i> Costumer Data</a
            >
        </li>
    </ul>
</aside>
