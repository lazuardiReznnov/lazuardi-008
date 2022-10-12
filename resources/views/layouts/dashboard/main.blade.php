<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Lazuardi-code | {{ $title }}</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" type="text/css" href="/asset/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/asset/css/trix.css" />
        <script type="text/javascript" src="/asset/js/trix.js"></script>

        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
        />
        <script src="/asset/js/lazuardi-008.js"></script>
    </head>

    <body>
        <!-- header -->
        <!-- @include('layouts.dashboard.header') -->
        <!-- endheader -->
        <!-- navbar -->
        @include('layouts.dashboard.nav')
        <!-- endnavbar -->

        <!-- main -->
        <main>
            <div class="container-fluid">
                <div class="row g-0 mt-5">
                    <div
                        class="col-md-3 bg-blue-900 p-2 min-vh-100 text-blue-100 shadow"
                    >
                        <!-- aside -->
                        @include('layouts.dashboard.aside')
                        <!-- endaside -->
                    </div>
                    <div class="col-md-9 p-4">
                        <section>@yield('contain')</section>
                    </div>
                </div>
            </div>
        </main>
        <!-- endmain -->
        <!-- footer -->
        @include('layouts.dashboard.footer')

        <!-- Endfooter -->

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
