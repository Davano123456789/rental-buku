<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/login.css" />
    <title>Halaman login</title>
</head>

<body>
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3 wrap-center">

                    @if ($errors->any())
                        <div class="alert alert-danger w-75 d-flex justify-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="title text-center">
                        <h2>Halaman Register</h2>

                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="wrap-input mt-2">
                            <div class="label mb-2">
                                <label for="username">Username</label>
                            </div>
                            <div class="input">
                                <input type="text" name="username" id="username" />
                            </div>
                        </div>
                        <div class="wrap-input mt-2">
                            <div class="label2 mb-2">
                                <label for="password"> password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="password" id="password" />
                            </div>
                        </div>
                        <div class="wrap-input mt-2">
                            <div class="label2 mb-2">
                                <label for="phone"> phone</label>
                            </div>
                            <div class="input">
                                <input type="text" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="wrap-input mt-2">
                            <div class="label2 mb-2">
                                <label for="addres"> addres</label>
                            </div>
                            <div class="input">
                                <textarea name="addres" id="addres" cols="50" rows="5" requared></textarea>
                            </div>
                        </div>
                        <div class="forget">
                            <a href="login">Login</a>
                        </div>
                        <button type="submit" class="menu-login mt-4"
                            style="background-color: rgb(0, 0, 180); border: none;text-decoration:none;">
                            <div class="fill" style="color: white">Login Now</div>
                        </button>
                    </form>
                    </>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>
