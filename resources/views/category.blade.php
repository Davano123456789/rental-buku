@extends('layouts.mainlayout')
@section('title', 'category')
@section('content')
    <h1>Category List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="category-deleted" class="btn btn-secondary me-4">View Deleted Data</a>
        <a href="category-add" class="btn btn-primary">Add Categories</a>
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
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="category-edit/{{ $item->slug }}">Edit</a>
                            <a href="category-delete/{{ $item->slug }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
