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
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session("success") }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="close"
        ></button>
    </div>
    @endif
    <form
        action="/dashboard/dashboardAbout/{{ $data->id }}"
        method="post"
        enctype="multipart/form-data"
    >
        @csrf @method('put')
        <div class="row mb-3">
            <div class="col-md">
                <label for="img" class="form-label text-blue-600">Photo</label>
                @if($data->img)
                <img
                    width="200"
                    src="{{ asset('storage/'. $data->img) }}"
                    class="img-preview img-fluid mb-2 d-block"
                    alt="about Image"
                />
                <input type="hidden" name="old_img" value="{{ $data->img }}" />
                @else
                <img width="200" class="img-preview img-fluid mb-2" alt="" />
                @endif
            </div>
            <div class="col-md">
                <input
                    class="form-control form-control-sm @error('img') is_invalid @enderror"
                    id="pic"
                    type="file"
                    name="img"
                    onchange="previewImage()"
                />
                @error('img')
                <div id="img" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr />
        <div class="row mb-3">
            <div class="col-md">
                <label for="title" class="form-label text-blue-600"
                    >Title</label
                >
                <h4>{!! $data->title !!}</h4>
            </div>
            <div class="col-md">
                <input
                    type="text"
                    class="form-control form-control-sm @error('title') is-invalid @enderror"
                    id="title"
                    name="title"
                    value="{{ old('title',$data->title) }}"
                />
                @error('title')
                <div id="title" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr />
        <div class="row mb-3">
            <div class="col-md">
                <label for="smallTitle" class="form-label text-blue-600"
                    >Small Title</label
                >
                <p>{!! $data->smallTitle !!}</p>
            </div>
            <div class="col-md">
                <input
                    type="text"
                    class="form-control form-control-sm @error('smallTitle') is-invalid @enderror"
                    id="smallTitle"
                    name="smallTitle"
                    value="{{ old('smallTitle',$data->smallTitle) }}"
                />
                @error('smallTitle')
                <div id="smallTitle" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr />
        <div class="row mb-3 justify-content-between">
            <div class="col-md-5">
                <label for="description1" class="form-label text-blue-600"
                    >description1</label
                >
                <p>{!! $data->descriptions1 !!}</p>
            </div>
            <div class="col-md-6">
                <input id="descriptions1" type="hidden" name="descriptions1" />
                <trix-editor
                    input="descriptions1"
                    >{{ $data->descriptions1 }}</trix-editor
                >
                @error('descriptions1')
                <div id="descriptions1" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr />
        <div class="row mb-3 justify-content-between">
            <div class="col-md-5">
                <label for="descriptions2" class="form-label text-blue-600"
                    >description2</label
                >
                <p>{!! $data->descriptions2 !!}</p>
            </div>
            <div class="col-md-6">
                <input id="descriptions2" type="hidden" name="descriptions2" />
                <trix-editor
                    input="descriptions2"
                    >{{ $data->descriptions2 }}</trix-editor
                >
                @error('descriptions2')
                <div id="descriptions2" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr />
        <div class="row mb-3">
            <div class="col-md">
                <label for="fb" class="form-label text-blue-600"
                    >Facebook Link</label
                >
                <p>
                    <a
                        href="{{ $data->fb }}"
                        class="badge bg-blue-300 text-decoration-none"
                        ><i class="bi bi-facebook"></i
                    ></a>
                </p>
            </div>
            <div class="col-md">
                <input
                    type="text"
                    class="form-control form-control-sm @error('fb') is-invalid @enderror"
                    id="fb"
                    name="fb"
                    value="{{ old('fb',$data->fb) }}"
                />
                @error('fb')
                <div id="fb" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md">
                <label for="ln" class="form-label text-blue-600"
                    >Linkind Link</label
                >
                <p>
                    <a
                        href="{{ $data->ln }}"
                        class="badge bg-blue-300 text-decoration-none"
                        ><i class="bi bi-linkedin"></i
                    ></a>
                </p>
            </div>
            <div class="col-md">
                <input
                    type="text"
                    class="form-control form-control-sm @error('ln') is-invalid @enderror"
                    id="ln"
                    name="ln"
                    value="{{ old('ln',$data->ln) }}"
                />
                @error('ln')
                <div id="ln" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md">
                <label for="ins" class="form-label text-blue-600"
                    >Instagram Link</label
                >
                <p>
                    <a
                        href="{{ $data->ins }}"
                        class="badge bg-blue-300 text-decoration-none"
                        ><i class="bi bi-instagram"></i
                    ></a>
                </p>
            </div>
            <div class="col-md">
                <input
                    type="text"
                    class="form-control form-control-sm @error('ins') is-invalid @enderror"
                    id="ins"
                    name="ins"
                    value="{{ old('ins',$data->ins) }}"
                />
                @error('ins')
                <div id="ins" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3 ms-1">
            <div class="col-md">
                <button class="btn btn-primary" type="submit" name="save">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
