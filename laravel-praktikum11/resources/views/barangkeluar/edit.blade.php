@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Edit Data Barang Keluar</h3>

    <form action="{{ url('/barangkeluar/' . $row->gol_id) }}" method="POST">
        @method('PATCH') 
        @csrf
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" class="form-control" name="keluar_kode" value="{{ $row->keluar_kode }}">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="keluar_nama" value="{{ $row->keluar_nama }}">
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE">
        </div>
    </form>
</div>

@endsection