

@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->
<div class="card p-3">
    <div class="row border-bottom border-primary justify-content-between mb-3">
        <div class="col-md-4">
            <h1
                class="text-blue-700 fs-24 fw-bold mb-3 text-shadow text-uppercase"
            >
                About
            </h1>
        </div>
        
    </div>
</div>
<!-- End dashboard Head -->
<!-- Jumbotron -->
<div class="card mt-3 p-4 border">
    <img
        class="rounded-circle mx-auto d-block shadow my-3"
        src="http://source.unsplash.com/200x200?computer"
        alt=""
        width="300"
    />

    <h3 class="text-center text-uppercase text-blue-700 text-shadow">
        {!! $data->title; !!}
    </h3>
    <p class="text-center text-blue-300 b-3 fs-14">
        {{ $data->smallTitle }}
    </p>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <p class="fs-12 text-blue-400 font-reguler">
              {{ $data->descriptions1 }}
            </p>
        </div>
        <div class="col-md-5">
            <p class="fs-12 text-blue-400 font-reguler">
                {{ $data->descriptions2 }}
            </p>
        </div>
    </div>
    <p class="text-center">
        <a href="{{ $data->fb }}" class="badge bg-blue-300 text-decoration-none"
            ><i class="bi bi-facebook"></i></a
        >|
        <a href="{{ $data->ln }}" class="badge bg-blue-300 text-decoration-none"
            ><i class="bi bi-instagram"></i></a
        >|
        <a href="{{ $data->ins }}" class="badge bg-blue-300 text-decoration-none"
            ><i class="bi bi-linkedin"></i
        ></a>
    </p>
</div>
<!-- endJumbotron -->
<!-- modal form -->
<!-- Button trigger modal -->
<button
    type="button"
    class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
>
    Launch demo modal
</button>

<!-- Modal -->

</div>
@endsection
