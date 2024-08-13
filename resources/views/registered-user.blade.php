@extends('layouts.mainlayout')
@section('title', 'Users Registereds')
@section('content')
    <h1>New Registered User List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="/users" class="btn btn-primary">Back</a>
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
                @foreach ($registeredUsers as $item)
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
