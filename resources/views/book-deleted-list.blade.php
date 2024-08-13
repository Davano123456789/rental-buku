@extends('layouts.mainlayout')
@section('title', 'deleted category list')
@section('content')
    <h1>Deleted Category List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="/books" class="btn btn-info me-4">View Category</a>

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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedBook as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->book_code }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <a href="/book-restore/{{ $item->slug }}">Restore</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
