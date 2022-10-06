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
        <div class="mb-3 col-5">
            <label for="title" class="form-label text-blue-600">Title</label>
            <h4 class="text-uppercase text-blue-700 text-shadow">
                {!! $data->title; !!}
            </h4>
            <input
                type="text"
                class="form-control form-control-sm @error('title') is-invalid @enderror"
                id="title"
                placeholder="Change Title Here"
                name="title"
                value="{{ old('title',$data->title) }}"
            />
            @error('title')
            <div id="title" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-5">
            <label for="smallTitle" class="form-label text-blue-600"
                >Small Title</label
            >
            <p class="text-blue-300 b-3 fs-14">
                {{ $data->smallTitle; }}
            </p>
            <input
                type="text"
                class="form-control form-control-sm @error('smallTitle') is-invalid @enderror"
                id="smallTitle"
                placeholder="Change Small Title Here"
                name="smallTitle"
                value="{{ old('smallTitle',$data->smallTitle) }}"
            />
            @error('title')
            <div id="smallTitle" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-5">
            <label for="descriptions1" class="form-label text-blue-600"
                >descriptions1</label
            >
            <textarea
                type="text"
                class="form-control form-control-sm @error('descriptions1') is-invalid @enderror"
                id="descriptions1"
                placeholder="Change Small Title Here"
                name="descriptions1"
                >{{ old('descriptions1',$data->descriptions1) }}
            </textarea>
            @error('descriptions1')
            <div id="descriptions1" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-5">
            <label for="descriptions2" class="form-label text-blue-600"
                >descriptions2</label
            >
            <textarea
                class="form-control form-control-sm @error('descriptions2') is-invalid @enderror"
                id="descriptions2"
                placeholder="Change Small Title Here"
                name="descriptions2"
                >{{ old('descriptions2',$data->descriptions2) }}
            </textarea>
            @error('descriptions2')
            <div id="descriptions2" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </form>
</div>
@endsection
