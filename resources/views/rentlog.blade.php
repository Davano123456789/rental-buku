@extends('layouts.mainlayout')
@section('title', 'rent log')
@section('content')
    <h1>ini halaman renlog tetes</h1>

    <div>
        <div class="my-2 w-50">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <x-rent-log-table :rentlog="$rentlogs" />
    </div>
@endsection
