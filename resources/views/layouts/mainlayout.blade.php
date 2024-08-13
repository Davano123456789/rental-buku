<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Rental Buku | @yield('title')</title>
</head>
<style>

</style>

<body>

    <div class="main d-flex justify-content-between flex-column">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" style="font-weight: 600" href="#">Rental Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="body-content h-100 g-0">
            <div class="row h-100 g-0">
                <div class="col-lg-2 collapse d-lg-block" id="navbarNavAltMarkup">
                    <div class="sidebar h-100">
                        @if (Auth::user())


                            @if (Auth::user()->role_id == 1)
                                {{-- <li> <a href="">Dasboard</a></li>
                                <li> <a href="">Books</a></li>
                                <li>Categories</li>
                                <li>Users</li>
                                <li>Rent Log</li>
                                <li>Log Out</li> --}}

                                <a href="/dashboard"
                                    @if (request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>

                                <a href="/books" @if (request()->route()->uri == 'books' ||
                                        request()->route()->uri == 'book-add' ||
                                        request()->route()->uri == 'book-edit/{slug}') class='active' @endif>Books</a>
                                <a href="/categories"
                                    @if (request()->route()->uri == 'categories' ||
                                            request()->route()->uri == 'category-add' ||
                                            request()->route()->uri == 'category-deleted' ||
                                            request()->route()->uri == 'category-delete/{slug}' ||
                                            request()->route()->uri == 'category-edit/{slug}') class='active' @endif>Categories</a>
                                <a href="/users" @if (request()->route()->uri == 'users' ||
                                        request()->route()->uri == 'registered-user' ||
                                        request()->route()->uri == 'user-detail/{slug}' ||
                                        request()->route()->uri == 'user-ban/{slug}' ||
                                        request()->route()->uri == 'user-banned') class='active' @endif>Users</a>
                                <a href="/book-rent" @if (request()->route()->uri == 'book-rent') class='active' @endif>Book Rent
                                    <a href="/rent-logs" @if (request()->route()->uri == 'rent-logs') class='active' @endif>Rent
                                        logs
                                    </a>
                                    <a href="/" @if (request()->route()->uri == '/') class='active' @endif>Book
                                        list</a>

                                    <a href="/logout">Log Out</a>
                                @else
                                    <a href="/profile"
                                        @if (request()->route()->uri == 'profile') class='active' @endif>Profile</a>
                                    <a href="/" @if (request()->route()->uri == '/') class='active' @endif>Book
                                        list</a>
                                    <a href="/logout">Log Out</a>
                            @endif
                        @else
                            <a href="/" @if (request()->route()->uri == '/') class='active' @endif>Book list</a>
                            <a href="/login" @if (request()->route()->uri == 'login') class='active' @endif>Log In</a>
                        @endif


                    </div>
                </div>
                <div class="col-lg-10 p-5">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        console.log("Hello, World!").,
    </script>
    {{-- <div class="content">

        @yield('content')
    </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
