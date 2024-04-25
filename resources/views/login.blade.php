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
    <link rel="stylesheet" href="{{ asset('assets/css/loginpage.css') }}">
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    <div class="px-5 ms-xl-4">
                        <span class="h1 fw-bold mb-0"><img src="{{ asset('assets/images/iconLaravel.jpg') }}"
                                id="laraicon" alt=""></span>
                    </div>
                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">
                        <form style="width: 23rem;" action="/loginuser" method="post">
                            @csrf {{ csrf_field() }}

                            <h3 class="pb-3 loginHeader">SIGN IN</h3>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username: </label>
                                <input type="text" name="username" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password: </label>
                                <input type="password" name="password" class="form-control " />
                            </div>
                            <div class="pt-1 mb-4">
                                <button class="btn btnLog" type="submit">Login</button>
                            </div>
                            <p>Don't have an account? <a href="{{ route('regis') }}" class="link-info">Register here</a>
                            </p>
                        </form>
                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('assets/images/lara.png') }}" alt="Login image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: start;">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
