<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>




    <nav class="navbar navbar-expand-lg " style="background-color: #2A9D8F;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TripKuy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        @if (auth()->user()->role == '1')
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/Ticket">My Ticket</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/Ticket">Order</a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" style="background: transparent; border:none !important; ">
                                    <a class="nav-link" methhref="/logout">LogOut</a>
                                </button>
                                {{-- <a class="nav-link" methhref="/logout">LogOut</a> --}}
                            </form>

                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/login">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">REGISTER</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>

    </nav>



    <div>
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>