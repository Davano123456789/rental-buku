@extends('layouts.mainlayout')
@section('title', 'pakar')
@section('content')
    <h1>ini halaman hasil</h1>
    @if (isset($disease))
        <h1>Anda terkena penyakit {{ $disease }}</h1>
    @else
        <h1>Tidak ada diagnosis yang tersedia</h1>
    @endif
@endsection
