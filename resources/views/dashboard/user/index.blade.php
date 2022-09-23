@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->

<h1
    class="text-blue-700 fs-24 fw-bold border-bottom border-primary mb-3 text-shadow mb-5"
>
    USER MANAGEMENT
</h1>
<!-- End dashboard Head -->

<!-- body -->
<div class="card bg-blue-100 text-blue-100 shadow mb-5">
    <div class="card-header font-semibold bg-blue-800">User List</div>
    <div class="card-body text-blue-50">
        <div class="row mb-2">
            <div class="col-sm ms-2 mb-4">
                <button class="btn btn-primary btn-sm">Add</button>
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
        <table class="table text-blue-900 p-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @if($users->count()) @foreach($users as $user)

                <tr>
                    <th scope="row">
                        {{ ($users->currentpage()-1) * $users->perpage() + $loop->index + 1 }}
                    </th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->is_admin == 1)
                        {{ $role = 'Admin' }} @else
                        {{$role =
                        'user'}}
                        @endif
                    </td>
                    <td>
                        <a
                            href="/dashboard/user/{{ $user->id }}"
                            class="badge text-bg-success"
                            ><i class="bi bi-eye"></i
                        ></a>
                        <a href="#" class="badge text-bg-warning"
                            ><i class="bi bi-pencil-square"></i
                        ></a>
                        <a href="#" class="badge text-bg-danger"
                            ><i class="bi bi-file-x-fill"></i
                        ></a>
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Endbody -->
@endsection
