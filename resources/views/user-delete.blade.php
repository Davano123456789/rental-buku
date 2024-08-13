@extends('layouts.mainlayout')
@section('title', 'user delete')
@section('content')
    <h4>apakah kamu yakin menghapus data {{ $user->username }} ?</h4>
    <div class="mt-4">
        <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger me-4">Yakin</a>
        <a href="/users" class="btn btn-info">Tidak jadi</a>
    </div>

@endsection
