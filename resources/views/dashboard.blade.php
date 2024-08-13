@extends('layouts.mainlayout')
@section('title', 'dashboard')
@section('content')
    <h3>Welcome, admin</h3>

    <div class="row">
        <div class="col-4">
            <div class="wrap-card">
                <div class="icon">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div class="fil">
                    <div class="title">
                        <h5>Books</h5>
                        <p>{{ $book_count }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="wrap-card" style="background-color: brown">
                <div class="icon">
                    <i class="fa-solid fa-list"></i>
                </div>
                <div class="fil">
                    <div class="title">
                        <h5>Categories</h5>
                        <p>{{ $category_count }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="wrap-card" style="background-color: rgb(75, 0, 75)">
                <div class="icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="fil">
                    <div class="title">
                        <h5>User</h5>
                        <p>
                        <p>{{ $user_count }}</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-5">
        <h2>#Rent Log</h2>
    </div>

    <div class="mb-4">
        <table class="table">
            <thead>

                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Book Title</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actual Return Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" style="text-align: center">No Data</td>
                </tr>
            </tbody>
        </table>

    </div>

@endsection
