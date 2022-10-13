@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->
<div class="row ms-1 mb-3">
    <div class="col-md">
        <h1
            class="text-blue-700 fs-24 fw-bold border-bottom border-primary text-shadow mb-3"
        >
            <a href="/dashboard" class="badge bg-blue-700"
                ><i class="bi bi-backspace"></i
            ></a>
            PRODUCT MANAGEMENT | FORM ADD PRODUCT
        </h1>
    </div>
</div>
<!-- End dashboard Head -->
<div class="card bg-blue-100 text-blue-100 shadow mb-5 col-sm-8">
    <div class="card-header font-semibold bg-blue-800">Product Form</div>
    <div class="card-body text-blue-50">
        <form
            method="post"
            action="/dashboard/product"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="mb-3 col-md-5">
                <label for="name" class="form-label text-blue-600">Name</label>
                <input
                    type="text"
                    class="form-control form-control-sm @error('name') is-invalid @enderror"
                    id="name"
                    placeholder="name"
                    name="name"
                    required
                    value="{{ old('name') }}"
                />
                @error('name')
                <div id="name" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 col-md-5">
                <label for="slug" class="form-label text-blue-600">Slug</label>
                <input
                    type="text"
                    class="form-control form-control-sm @error('slug') is-invalid @enderror"
                    id="slug"
                    placeholder="slug"
                    name="slug"
                    value="{{ old('slug') }}"
                />
                @error('slug')
                <div id="slug" class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror
            </div>
            <div class="mb-3 col-md-5">
                <label for="role" class="form-label text-blue-600"
                    >Category</label
                >
                <select
                    class="form-select form-select-sm"
                    aria-label="category"
                    name="category"
                >
                    <option selected>Categories</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 col-md-5">
                <label for="role" class="form-label text-blue-600">Merk</label>
                <select
                    class="form-select form-select-sm"
                    aria-label="merk"
                    name="merk"
                >
                    <option selected>MERK</option>
                    @foreach($merks as $merk)
                    <option value="{{ $merk->id }}">
                        {{ $merk->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-blue-600"
                    >Description</label
                >
                <input id="description" type="hidden" name="description" />
                <div class="card p-2">
                    <trix-editor class="text-dark" input="description">{{
                        old("description")
                    }}</trix-editor>
                </div>

                @error('description')
                <div id="description" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 col-5">
                <label for="pic" class="form-label text-blue-600">Photo</label>
                <img width="200" class="img-preview img-fluid mb-2" alt="" />
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
            <div class="mb-3 ms-3 mt-5">
                <button type="submit" class="btn bg-blue-800 text-blue-50">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    // slug post
    //  slug alternatif`
    const name = document.querySelector("#name");
    const slug = document.querySelector("#slug");
    const link = "/dashboard/products/checkSlug?name=";

    makeslug(name, slug, link);
    // function makeslug(name, slug, link) {
    //     name.addEventListener("change", function () {
    //         fetch(link + name.value)
    //             .then((response) => response.json())
    //             .then((data) => (slug.value = data.slug));
    //     });
    // }
</script>
@endsection
