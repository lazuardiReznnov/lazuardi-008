@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->
<!-- <div class="card p-3 my-2"> -->
<div class="row border-bottom border-primary justify-content-between mb-3">
    <div class="col-md-5">
        <h1 class="text-blue-700 fs-24 fw-bold mb-3 text-shadow">
            Selamat Datang, {{ auth()->user()->name }}
        </h1>
    </div>
    <div class="col-md-3">
        <form action="" class="">
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="form-control text-blue-400 border-primary"
                    placeholder="search"
                    aria-label="search"
                    aria-describedby="search"
                />
                <button
                    class="btn btn-outline-primary bg-blue-600 text-blue-100"
                    type="submit"
                    id="search"
                >
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- </div> -->
<!-- End dashboard Head -->

<!-- list Menu Dashboard -->
<div class="card p-3">
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <a href="#" class="text-decoration-none">
                <div
                    class="card p-2 border-primary d-flex flex-row flex-md-column flex-lg-row align-items-baseline bg-hover"
                >
                    <div class="fs-24 text-blue-400 mx-3">
                        <i class="bi bi-archive"></i>
                    </div>
                    <div>
                        <h3
                            class="fs-16 text-blue-400 text-uppercase font-bold"
                        >
                            product
                        </h3>
                        <p class="fs-12 text-blue-400">descropstion</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="#" class="text-decoration-none">
                <div
                    class="card p-2 border-primary d-flex flex-row flex-md-column flex-lg-row align-items-baseline bg-hover-card"
                >
                    <div class="fs-24 text-blue-400 mx-3">
                        <i class="bi bi-receipt"></i>
                    </div>
                    <div>
                        <h3
                            class="fs-16 text-blue-400 text-uppercase font-bold"
                        >
                            Transaction
                        </h3>
                        <p class="fs-12 text-blue-400">descropstion</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div
                    class="card p-2 border-primary d-flex flex-row flex-md-column flex-lg-row align-items-baseline bg-hover-card"
                >
                    <div class="fs-24 text-blue-400 mx-3">
                        <i class="bi bi-person-rolodex"></i>
                    </div>
                    <div>
                        <h3
                            class="fs-16 text-blue-400 text-uppercase font-bold"
                        >
                            Costumer
                        </h3>
                        <p class="fs-12 text-blue-400">descropstion</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
