@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Tambah Data Barang</h3>

    <form action="{{ url('/pelanggan') }}" method="POST">
        @csrf 
        <div class="mb-3">
            <label>No.</label>
            <input type="text" class="form-control" name="pel_no">
        </div>

        <div class="mb-3">
            <label>Id Barang</label>
            <input type="text" class="form-control" name="pel_id_user">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="pel_nama">
        </div>

        <div class="mb-3">
            <label>Jenis</label>
            <textarea class="form-control" name="pel_alamat"></textarea>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="pel_hp">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="text" class="form-control" name="pel_ktp">
        </div>

        <div class="mb-3">
            <label>Pemasok</label>
            <input type="text" class="form-control" name="pel_seri">
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>

@endsection