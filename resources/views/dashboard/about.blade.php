@extends('layouts.dashboard.main') @section('contain')
<!-- dashboard Head -->
<div class="card p-3">
    <div class="row border-bottom border-primary justify-content-between mb-3">
        <div class="col-md-3">
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
        Lazuardi<i class="bi bi-activity"></i>Code
    </h3>
    <p class="text-center text-blue-300 b-3 fs-14">
        Web Development Program System
    </p>
    <div class="row">
        <div class="col-md">
            <p class="fs-12 text-blue-400 font-reguler">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                recusandae tempore voluptate, perspiciatis sapiente voluptates,
                voluptas itaque possimus assumenda veniam vitae alias molestias
                excepturi aspernatur quo commodi deserunt amet consequatur
                accusantium eveniet harum? Cupiditate cum dolores quisquam
                deleniti libero necessitatibus assumenda sapiente eum
                praesentium? Sequi, eum?
            </p>
        </div>
        <div class="col-md">
            <p class="fs-12 text-blue-400 font-reguler">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                recusandae tempore voluptate, perspiciatis sapiente voluptates,
                voluptas itaque possimus assumenda veniam vitae alias molestias
                excepturi aspernatur quo commodi deserunt amet consequatur
                accusantium eveniet harum? Cupiditate cum dolores quisquam
                deleniti libero necessitatibus assumenda sapiente eum
                praesentium? Sequi, eum?
            </p>
        </div>
    </div>
    <p class="text-center">
        <a href="#" class="badge bg-blue-300 text-decoration-none"
            ><i class="bi bi-facebook"></i></a
        >|
        <a href="#" class="badge bg-blue-300 text-decoration-none"
            ><i class="bi bi-instagram"></i></a
        >|
        <a href="#" class="badge bg-blue-300 text-decoration-none"
            ><i class="bi bi-linkedin"></i
        ></a>
    </p>
</div>
<!-- endJumbotron -->
@endsection
