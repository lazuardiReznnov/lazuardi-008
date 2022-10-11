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
            <div class="mb-3">
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
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="password" class="form-label text-blue-600"
                    >Password</label
                >
                <input
                    type="password"
                    class="form-control form-control-sm @error('password') is-invalid @enderror"
                    id="password"
                    name="password"
                />
                @error('password')
                <div id="password" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-blue-600"
                    >Email address</label
                >
                <input
                    type="email"
                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                    id="email"
                    placeholder="name@example.com"
                    name="email"
                />
                @error('email')
                <div id="email" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role" class="form-label text-blue-600">Role</label>
                <select
                    class="form-select form-select-sm"
                    aria-label="role"
                    name="is_admin"
                >
                    <option selected>Open this select menu</option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
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
    function makeslug(name, slug, link) {
        name.addEventListener("change", function () {
            fetch(link + name.value)
                .then((response) => response.json())
                .then((data) => (slug.value = data.slug));
        });
    }
</script>
@endsection
