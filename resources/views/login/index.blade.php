<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Lazuardi-code</title>

        <title>Lazuardi-code | Login</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="/asset/css/style.css" />

        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
        />
    </head>

    <body>
        <main>
            <div class="container mt-5">
                <div class="card p-5">
                    <div class="row mb-4">
                        <div class="col-md align-self-center">
                            <h3
                                class="text-center text-uppercase text-blue-700 text-shadow"
                            >
                                Lazuardi<i class="bi bi-activity"></i>Code
                            </h3>
                            <p class="text-center text-blue-300 b-3 fs-14">
                                Web Development Program System
                            </p>
                        </div>
                        <div class="col-md">
                            <!-- pesan -->
                            @if(session()->has('loginError'))
                            <div
                                class="alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                {{ session("loginError") }}

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="close"
                                ></button>
                            </div>
                            @endif
                            <!-- endpesan -->
                            <!-- card form -->
                            <div class="card col-md-8 p-2 bg-blue-400">
                                <h3
                                    class="font-roboto text-center fs-20 text-blue-100 text-uppercase text-shadow"
                                >
                                    LOGIN FORM
                                </h3>
                                <!-- <div class="card-header bg-blue-700 text-blue-50">Login</div> -->
                                <div class="card-body text-blue-700">
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input
                                                type="text"
                                                name="username"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="floatingInput"
                                                placeholder="username"
                                                value="{{ old('username') }}"
                                                required
                                            />
                                            <label for="floatingInput"
                                                >Username</label
                                            >
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input
                                                type="password"
                                                name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="floatingPassword"
                                                placeholder="Password"
                                                required
                                            />
                                            <label for="floatingPassword"
                                                >Password</label
                                            >
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <button
                                                class="btn btn-primary ms-1"
                                                id="save"
                                                type="submit"
                                            >
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end Card Form -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
