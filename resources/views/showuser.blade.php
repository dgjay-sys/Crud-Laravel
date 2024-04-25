<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img id="MDB-logo"
                    src="{{ asset('assets/images/iconLaravel.jpg') }}" alt="MDB Logo" draggable="false"
                    height="30" /></a>
            <ul class="navbar-nav ms-3">
                <li class="nav-item me-3">
                    <a class="nav-link d-flex align-items-center" href="{{ route('dashboard') }}">dashboard</a>
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
        <h1>List of Users</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>user_id</th>
                    <th>user_name</th>
                    <th>username</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <tbody>
                <!-- Main Blade view -->

                @foreach ($name as $key => $data)
                    <tr>
                        <td>{{ $data->user_id }}</td>
                        <td>{{ $data->fname }}</td>
                        <td>{{ $data->username }}</td>
                        <td>
                            <form action="/delete/{{ $data->user_id }}" method="POST">
                                @csrf {{ csrf_field() }}
                                <button class="btn btn-danger" type="submit">delete</button>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $data->user_id }}">
                                Edit
                            </button>
                        </td>
                    </tr>

                    <!-- Modal for editing user -->
                    <div class="modal fade" id="exampleModal{{ $data->user_id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel{{ $data->user_id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{ $data->user_id }}">Edit User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/update/{{ $data->user_id }}" method="POST">
                                        @csrf
                                        <div>
                                            <label for="fname" class="form-outline ">Name:</label>
                                            <input type="text" name="fname" value="{{ $data->fname }}"
                                                class="form-control mb-4" placeholder="First Name">
                                        </div>
                                        <div>
                                            <label for="username" class="form-outline">Username:</label>
                                            <input type="text" name="username" value="{{ $data->username }}"
                                                class="form-control mb-4" placeholder="First Name">
                                        </div>
                                        <!-- Add more input fields as needed -->
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </tbody>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</body>

</html>
