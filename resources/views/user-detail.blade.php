@extends('layouts.mainlayout')
@section('title', 'Users Registereds')
@section('content')
    <h1>Detail User</h1>
    <div class="mt-5 d-flex justify-content-end">
        @if ($user->status == 'inactive')
            <a href="/user-approve/{{ $user->slug }}" class="btn btn-info">Approved User</a>
        @endif
    </div>
    <div>
        <div class="my-2 w-50">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="my-5 w-50">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" readonly value="{{ $user->username }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" class="form-control" readonly value=" {{ $user->phone }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <textarea name="" id="" cols="5" rows="5" class="form-control" style="resize: none">{{ $user->addres }}</textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status</label>
                <input type="text" class="form-control" readonly value=" {{ $user->status }}">
            </div>
        </div>
    </div>


@endsection
