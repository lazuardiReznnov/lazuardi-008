@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->
<div class="card p-3 my-2">
    <div class="row border-bottom border-primary justify-content-between mb-3">
        <div class="col-md-3">
            <h1 class="text-blue-700 fs-24 fw-bold mb-3 text-shadow">
                ABOUT Management
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
</div>
<!-- End dashboard Head -->

<!-- list Menu Dashboard -->
<div class="card p-3"></div>
@endsection
