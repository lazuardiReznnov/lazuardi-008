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
        <!-- header -->
        <!-- @include('layouts.dashboard.header') -->
        <!-- endheader -->
        <!-- navbar -->
        @include('layouts.landingpage.nav')
        <!-- endnavbar -->

        <!-- main -->
        <main>
            <div class="container-fluid">
                <!-- <div class="row g-0 mt-5">
                    <div class="col-md p-4"> -->
                @yield('contain')
                <!-- </div>
                </div> -->
            </div>
        </main>
        <!-- endmain -->
        <!-- footer -->
        @include('layouts.landingpage.footer')

        <!-- Endfooter -->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
