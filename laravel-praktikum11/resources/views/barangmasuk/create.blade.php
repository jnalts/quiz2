@extends('layouts.app')
@section('content')

<div class="container">
    <h1> Toko SABIRIN</h1>
    <h3>Tambah Data Barang Masuk</h3>

    <form action="{{ url('/barangmasuk') }}" method="POST">
        @csrf 
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" class="form-control" name="gol_kode">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="gol_nama">
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>

@endsection