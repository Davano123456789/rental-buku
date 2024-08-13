@extends('layouts.mainlayout')
@section('title', 'book rent')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <h1>Book Rent Form</h1>

    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
        <div class="">

            @if (session('message'))
                <div class="alert {{ session('alert-class') }}">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <form action="book-rent" method="post">
            @csrf
            <div class="my-3">
                <label for="user_id" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-control selectbox">
                    <option value="">Select user</option>
                    @foreach ($user as $item)
                        <option value="{{ $item->id }}">{{ $item->username }}</option>
                    @endforeach
                </select>

            </div>
            <div class="my-5">
                <label for="book_id" class="form-label">Book</label>
                <select name="book_id" id="book_id" class="form-control selectbox">
                    <option value="">Select book</option>
                    @foreach ($book as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>

            </div>
            <div>
                <button class="btn btn-primary w-100" type="submit">Submit</button>

            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.selectbox').select2();
        });
    </script>
@endsection
