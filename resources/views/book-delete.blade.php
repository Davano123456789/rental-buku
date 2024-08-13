@extends('layouts.mainlayout')
@section('title', 'book delete')
@section('content')
    <h4>apakah kamu yakin menghapus buku {{ $book->title }} ?</h4>
    <div class="mt-4">
        <a href="/book-destroy/{{ $book->slug }}" class="btn btn-danger me-4">Yakin</a>
        <a href="/books" class="btn btn-info">Tidak jadi</a>
    </div>

@endsection
