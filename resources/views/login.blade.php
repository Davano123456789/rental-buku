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
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="title text-center">
                        <h2>Halaman Login</h2>
                        <p class="mt-2">Don't have an acount ? <a href="">Sign Up</a></p>
                    </div>
                    <div class="menu-login mt-4">
                        <div class="icon"><img src="icon-facebook.webp" alt="" /></div>
                        <div class="fill">Log in with Facebook</div>
                    </div>
                    <div class="menu-login mt-4">
                        <div class="icon"><img src="google-icon.png" alt="" /></div>
                        <div class="fill">Log in with Google</div>
                    </div>
                    <div class="wrap-or">
                        <div class="garis"></div>
                        <div class="fill-or">OR</div>
                        <div class="garis"></div>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="wrap-input mt-2">
                            <div class="label mb-2">
                                <label for="username">Username</label>
                            </div>
                            <div class="input">
                                <input type="text" name="username" id="username" required />
                            </div>
                        </div>
                        <div class="wrap-input mt-2">
                            <div class="label2 mb-2">
                                <label for="password"> password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="password" id="password" requared />
                            </div>
                        </div>
                        <div class="forget">
                            <a href="register">Register acount</a>
                        </div>
                        <button type="submit" class="menu-login mt-4"
                            style="background-color: rgb(0, 0, 180); border: none;text-decoration:none;">
                            <div class="fill" style="color: white">Login Now</div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
