@extends('layouts.mainlayout')
@section('title', 'User')
@section('content')
    <h1>User List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="/user-banned" class="btn btn-secondary me-4">View Banned User</a>
        <a href="/registered-user" class="btn btn-primary">New Registered User</a>
    </div>
    <div>
        <div class="my-2 w-50">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <table class="table my-5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>
                            @if ($item->phone)
                                {{ $item->phone }}
                            @else
                                -
                            @endif


                        </td>
                        <td>
                            <a href="/user-detail/{{ $item->slug }}">Detail</a>
                            <a href="/user-ban/{{ $item->slug }}">Ban user</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
