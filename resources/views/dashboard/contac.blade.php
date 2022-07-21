@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->
<div class="card p-3">
    <div class="row border-bottom border-primary justify-content-between mb-3">
        <div class="col-md-3">
            <h1
                class="text-blue-700 fs-24 fw-bold mb-3 text-shadow text-uppercase"
            >
                Contac Us
            </h1>
        </div>
    </div>
</div>
<!-- End dashboard Head -->
<!-- form -->
<div class="card mt-3 p-4 border">
    <div class="row">
        <div class="col-md align-self-center">
            <h3 class="text-center text-uppercase text-blue-700 text-shadow">
                Lazuardi<i class="bi bi-activity"></i>Code
            </h3>
            <p class="text-center text-blue-300 b-3 fs-14">
                Web Development Program System
            </p>
        </div>
        <div class="col-md">
            <!-- card form -->
            <div class="card">
                <div class="card-header bg-blue-700 text-blue-50">
                    Form Contac
                </div>
                <div class="card-body text-blue-700">
                    <form action="">
                        <div class="mb-3">
                            <label for="email" class="form-label"
                                >Email address</label
                            >
                            <input
                                type="email"
                                class="form-control text-blue-700"
                                id="email"
                                placeholder="name@example.com"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input
                                type="text"
                                class="form-control text-blue-700"
                                id="name"
                                placeholder="mr. jhon Doe"
                            />
                        </div>
                        <div class="mb-3">
                            <textarea
                                class="form-control text-blue-700"
                                id="exampleFormControlTextarea1"
                                rows="3"
                            ></textarea>
                        </div>
                        <div class="mb-3">
                            <button
                                class="btn btn-primary ms-1"
                                id="save"
                                type="button"
                            >
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end Card Form -->
        </div>
    </div>
</div>
<!-- Endform -->
@endsection
