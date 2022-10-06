@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->
<div class="card p-3 my-2">
    <div class="row border-bottom border-primary justify-content-between mb-3">
        <div class="col-md">
            <h1
                class="text-blue-700 fs-24 fw-bold mb-3 text-shadow text-uppercase"
            >
                ABOUT Management
            </h1>
        </div>
    </div>
</div>
<!-- End dashboard Head -->

<!-- list Menu Dashboard -->
<div class="card p-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-5">
            <label for="pic" class="form-label text-blue-600">Photo</label>
            @if($data->pic)
            <img
                width="200"
                src="{{ asset('storage/'. $data->pic) }}"
                class="img-preview img-fluid mb-2 d-block"
                alt="about Image"
            />
            @else
            <img width="200" class="img-preview img-fluid mb-2" alt="" />
            @endif
            <input
                class="form-control form-control-sm @error('pic') is_invalid @enderror"
                id="pic"
                type="file"
                name="pic"
                onchange="previewImage()"
            />
            @error('pic')
            <div id="pic" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label text-blue-600">Title</label>
            <h4>{$data->title}</h4>
            <input
                type="text"
                class="form-control form-control-sm @error('title') is-invalid @enderror"
                id="title"
                placeholder="name@example.com"
                name="title"
                value="{{ old('title') }}"
            />
            @error('title')
            <div id="title" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </form>
</div>
@endsection
