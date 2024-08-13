@extends('layouts.mainlayout')
@section('title', 'pakar')
@section('content')
    <h1>ini halaman pakar</h1>
    <form action="pakar-add" method="post">
        @csrf
        <div>
            <label for="G1" class="form-label">G1</label>
            <input type="checkbox" name="G1" id="G1">
            <br>
            <label for="G2" class="form-label">G2</label>
            <input type="checkbox" name="G2" id="G2">
            <br>
            <label for="G3" class="form-label">G3</label>
            <input type="checkbox" name="G3" id="G3">
            <br>
            <label for="G4" class="form-label">G4</label>
            <input type="checkbox" name="G4" id="G4">
            <br>
            <label for="G5" class="form-label">G5</label>
            <input type="checkbox" name="G5" id="G5">
            <br>
            <label for="G6" class="form-label">G6</label>
            <input type="checkbox" name="G6" id="G6">
            <br>
            <label for="G7" class="form-label">G7</label>
            <input type="checkbox" name="G7" id="G7">
            <br>
            <label for="G8" class="form-label">G8</label>
            <input type="checkbox" name="G8" id="G8">
            <br>
            <label for="G9" class="form-label">G9</label>
            <input type="checkbox" name="G9" id="G9">
            <br>
            <label for="G10" class="form-label">G10</label>
            <input type="checkbox" name="G10" id="G10">
            <br>

        </div>
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Jalankan pakar</button>
        </div>
    </form>
@endsection
