@extends('layouts.mainlayout')
@section('title', 'category delete')
@section('content')
    <h4>apakah kamu yakin menghapus data {{ $category->name }} ?</h4>
    <div class="mt-4">
        <a href="/category-destroy/{{ $category->slug }}" class="btn btn-danger me-4">Yakin</a>
        <a href="/categories" class="btn btn-info">Tidak jadi</a>
    </div>

@endsection
