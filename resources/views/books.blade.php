@extends('layouts.mainlayout')
@section('title', 'category')
@section('content')
    <h1>Book List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="book-deleted" class="btn btn-secondary me-4">View Deleted Books</a>
        <a href="book-add" class="btn btn-primary">Add Book</a>
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
                    <th>Code</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->book_code }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            @foreach ($item->categories as $category)
                                - {{ $category->name }} <br>
                            @endforeach
                        </td>
                        <td>
                            <a href="/book-edit/{{ $item->slug }}">Edit</a>
                            <a href="/book-delete/{{ $item->slug }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
