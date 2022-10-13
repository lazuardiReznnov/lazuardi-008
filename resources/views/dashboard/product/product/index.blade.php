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
            PRODUCT MANAGEMENT
        </h1>
    </div>
</div>
<!-- End dashboard Head -->

<!-- body -->
<!-- pesan -->
@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session("loginError") }}

    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="close"
    ></button>
</div>
@endif @if(session()->has('success'))
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
<!-- endpesan -->
<div class="card text-blue-100 shadow mb-5">
    <div class="card-header font-semibold bg-blue-800 text-uppercase">
        PRODUCT List
    </div>
    <div class="card-body text-blue-50">
        <div class="row mb-1">
            <div class="col-sm ms-2 mb-4">
                <a
                    href="/dashboard/product/create"
                    class="btn bg-blue-700 text-blue-100 btn-sm"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Create New product"
                >
                    Add
                </a>
            </div>
            <div class="col-sm-4 ms-2">
                <div class="input-group mb-3">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                        aria-label="search"
                        aria-describedby="button-addon2"
                    />
                    <button
                        class="btn btn-outline-primary"
                        type="button"
                        id="button-addon2"
                    >
                        Search
                    </button>
                </div>
            </div>
        </div>
        <hr class="text-blue-900" />
        <table class="table text-blue-900 p-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pic</th>
                    <th scope="col">CATEGORY</th>
                    <th scope="col">Merk</th>
                    <th scope="col">name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @if($data->count()) @foreach($data as $product)

                <tr>
                    <th scope="row">
                        {{ ($data->currentpage()-1) * $data->perpage() + $loop->index + 1 }}
                    </th>
                    <td>
                        @if($product->pic != 0)
                        <img
                            width="75"
                            src="{{ asset('storage/'. $data->pic) }}"
                            alt=""
                        />
                        @else
                        {{ "-" }}
                        @endif
                    </td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->merk->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <a
                            href="/dashboard/product/{{ $product->slug }}"
                            class="badge text-bg-success"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Detail product"
                            ><i class="bi bi-eye"></i
                        ></a>
                        <a
                            href="/dashboard/product/{{ $product->slug }}/edit"
                            class="badge text-bg-warning"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Edit product"
                            ><i class="bi bi-pencil-square"></i
                        ></a>

                        <form
                            action="/dashboard/product/product/{{ $product->slug }}"
                            method="post"
                            class="d-inline"
                        >
                            @method('delete') @csrf
                            <button
                                class="badge bg-danger border-0"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Hapus product"
                                onclick="return confirm('are You sure ??')"
                            >
                                <i class="bi bi-file-x-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach @else
                <tr>
                    <td colspan="6" class="text-center">Data Not Found</td>
                </tr>
                @endif
            </tbody>
            <caption class="mt-3"></caption>
        </table>
        <div class="row">
            <div class="col-md-8">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Endbody -->
@endsection
