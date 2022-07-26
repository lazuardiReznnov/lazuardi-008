@extends('layouts.dashboard.main') @section('contain')
<h1
    class="text-blue-700 fs-24 fw-bold border-bottom border-primary mb-3 text-shadow"
>
    <a href="/dashboard/user" class="badge bg-blue-700"
        ><i class="bi bi-backspace"></i
    ></a>
    USER MANAGEMENT - Profil
</h1>

<div class="card p-4">
    <div class="row justify-content-md-center">
        <div class="col-md-5">
            @if($data->pic != 0)
            <img
                width="200"
                class="rounded-circle d-block shadow my-3"
                src="{{ asset('storage/'. $data->pic) }}"
                alt=""
            />
            @else

            <img
                class="rounded-circle d-block shadow my-3"
                src="http://source.unsplash.com/200x200?computer"
                alt=""
                width="200"
            />
            @endif
        </div>
        <div class="col-md-6 align-seft-center">
            <h3
                class="fs-20 font-bold text-uppercase text-shadow text-blue-700"
            >
                Detail Acount
            </h3>
            <dl class="row">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">
                    {{$data->name}}
                </dd>

                <dt class="col-sm-3">Username</dt>
                <dd class="col-sm-9">
                    {{ $data->username }}
                </dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">
                    {{$data->email}}
                </dd>
                <dt class="col-sm-3">Role</dt>
                <dd class="col-sm-9">
                    @if($data->is_admin == 1)
                    {{ $role = 'Admin' }} @else
                    {{$role =
                        'user'}}
                    @endif
                </dd>
            </dl>
            <a href="#" class="btn btn-primary">Edit</a>
        </div>
    </div>

    <div class="row justify-content-md-center"></div>
</div>
<!-- End dashboard Head -->

@endsection
