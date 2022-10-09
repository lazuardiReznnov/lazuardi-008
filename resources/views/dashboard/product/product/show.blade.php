@extends('layouts.dashboard.main') @section('contain')
<div class="row mb-3">
    <div class="col-md">
        <h1
            class="text-blue-700 fs-24 fw-bold border-bottom border-primary text-shadow mb-3"
        >
            <a href="/dashboard/product" class="badge bg-blue-700"
                ><i class="bi bi-backspace"></i
            ></a>
            DETAIL PRODUCT
        </h1>
    </div>
</div>
<div class="card text-blue-50 shadow mb-5">
    <div class="card-header fs-14 font-semibold bg-blue-800 text-uppercase">
        <a
            href="#"
            class="link-light text-decoration-none"
            >{{ $data->category->name }}</a
        >-><a
            href="#"
            class="link-light text-decoration-none"
            >{{ $data->merk->name }}</a
        >-><a
            href="#"
            class="link-light text-decoration-none"
            >{{ $data->name }}</a
        >
    </div>
    <div class="card-body text-blue-50">
        <div class="row mb-3">
            <div class="col-md">
                @if($data->pic != 0)
                <img
                    width="100"
                    src="{{ asset('storage/'. $data->pic) }}"
                    alt=""
                />
                @else
                <img
                    class="rounded-circle mx-auto d-block shadow my-3"
                    src="http://source.unsplash.com/200x200?computer"
                    alt=""
                    width="150"
                />
                @endif
            </div>
            <div class="col-md">
                <ul class="list-group list-group-flush">
                    <li
                        class="list-group-item text-blue-600 text-uppercase font-bold"
                    >
                        {{ $data->name }}
                    </li>
                    <li class="list-group-item text-blue-600">
                        DP. {{ $data->dp }}
                    </li>
                    <li class="list-group-item text-blue-600">
                        @php $threemonth = ($data->three-$data->dp)/3 @endphp 3
                        Bulan : @currency($threemonth)
                    </li>
                    <li class="list-group-item text-blue-600">
                        @php $sixmonth= ($data->six-$data->dp)/6 @endphp 6 Bulan
                        : @currency( $sixmonth)
                    </li>
                    <li class="list-group-item text-blue-600">
                        @php $week= ($data->week-$data->dp)/100000 @endphp
                        Mingguan : {{ $week }} x100.000/Minggu
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md p-5">
            <nav>
                <div
                    class="nav nav-tabs text-blue-900"
                    id="nav-tab"
                    role="tablist"
                >
                    <button
                        class="nav-link active"
                        id="nav-desc-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-desc"
                        type="button"
                        role="tab"
                        aria-controls="nav-home"
                        aria-selected="true"
                    >
                        descriptionss
                    </button>
                    <button
                        class="nav-link"
                        id="nav-gallery-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-gallery"
                        type="button"
                        role="tab"
                        aria-controls="nav-gallery"
                        aria-selected="false"
                    >
                        Gallery
                    </button>
                </div>
            </nav>
            <div class="tab-content col-md-6" id="nav-tabContent">
                <div
                    class="tab-pane fade show active p-2 text-blue-800 fs-14"
                    id="nav-desc"
                    role="tabpanel"
                    aria-labelledby="nav-home-tab"
                    tabindex="0"
                >
                    {{ $data->descriptions }}
                </div>
                <div
                    class="tab-pane fade p-2 text-blue-800 fs-14"
                    id="nav-gallery"
                    role="tabpanel"
                    aria-labelledby="nav-profile-tab"
                    tabindex="0"
                >
                    Gallery Here
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
