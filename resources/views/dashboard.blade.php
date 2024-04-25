<!doctype html>
<html lang="en">

<head>
    {{-- <script type="text/javascript">
        history.pushState(null, null, `{{ route('login') }}`);
        window.addEventListener('popstate', function() {
            history.pushState(null, null, `{{ route('login') }}`);
        });

        document.addEventListener('DOMContentLoaded', function() {
            window.history.backward();
        });
    </script> --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/loginpage.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img id="MDB-logo"
                    src="{{ asset('assets/images/iconLaravel.jpg') }}" alt="MDB Logo" draggable="false"
                    height="30" /></a>
            <ul class="navbar-nav ms-3">
                <li class="nav-item me-3">
                    <a class="nav-link d-flex align-items-center" href="{{ route('show') }}">Users</a>
                </li>

                <li class="nav-item" style="">
                    <a class="nav-link d-flex align-items-center" href="logout"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="26" fill="currentColor" class="bi bi-box-arrow-right"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                        </svg></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Welcome: {{ $data->username }}</h1>
    </div>
</body>

</html>
