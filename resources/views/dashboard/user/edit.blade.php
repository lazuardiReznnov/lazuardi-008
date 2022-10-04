@extends('layouts.dashboard.main') @section('contain')
<!-- End dashboard Head -->
<div class="row ms-1 mb-3">
    <div class="col-md">
        <h1
            class="text-blue-700 fs-24 fw-bold border-bottom border-primary text-shadow mb-3"
        >
            <a href="/dashboard/user" class="badge bg-blue-700"
                ><i class="bi bi-backspace"></i
            ></a>
            USER MANAGEMENT || {{ $title }}
        </h1>
    </div>
</div>
<div class="card bg-blue-100 text-blue-100 shadow mb-5 col-sm-8">
    <div class="card-header font-semibold bg-blue-800">User Form</div>
    <div class="card-body text-blue-50">
        <form method="post" action="/dashboard/user/{{ $data->username }}">
            @method('put') @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-blue-600">Name</label>
                <input
                    type="text"
                    class="form-control form-control-sm @error('name') is-invalid @enderror"
                    id="name"
                    placeholder="name"
                    name="name"
                    required
                    value="{{ old('name',$data->name) }}"
                />
                @error('name')
                <div id="name" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label text-blue-600"
                    >Username</label
                >
                <input
                    type="text"
                    class="form-control form-control-sm @error('username') is-invalid @enderror"
                    id="username"
                    placeholder="username"
                    name="username"
                    value="{{ old('username',$data->username) }}"
                    disabled
                />
                @error('username')
                <div id="username" class="invalid-feedback">
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
                    value="{{ old('email',$data->email) }}"
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
                    @if(old('role',$data->role)==$data->role)
                    <option selected value="{{ $data->is_admin }}">
                        @if($data->is_admin==1) Admin @else User @endif
                    </option>
                    @endif
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
            </div>
            <div class="mb-3 col-5">
                <label for="pic" class="form-label text-blue-600">Photo</label>
                @if($data->pic != 0)
                <img
                    width="200"
                    src="{{ asset/photo/$data->pic }}"
                    class="img-fluid mb-2"
                    alt=""
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
            <div class="mb-3 ms-3 mt-5">
                <button type="submit" class="btn bg-blue-800 text-blue-50">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
