@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Edit Data Pelanggan</h3>

    <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
        @method('PATCH') 
        @csrf
        <div class="mb-3">
            <label>No.</label>
            <input type="text" class="form-control" name="pel_no" value="{{ $row->pel_no }}">
        </div>

        <div class="mb-3">
            <label>Id Barang</label>
            <input type="text" class="form-control" name="pel_id_user" value="{{ $row->pel_id_user }}">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="pel_nama" value="{{ $row->pel_nama }}">
        </div>

        <div class="mb-3">
            <label>Jenis</label>
            <textarea class="form-control" name="pel_alamat" value="{{ $row->pel_alamat }}"></textarea>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="pel_hp" value="{{ $row->pel_hp }}">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="text" class="form-control" name="pel_ktp" value="{{ $row->pel_ktp }}">
        </div>

        <div class="mb-3">
            <label>Pemasok</label>
            <input type="text" class="form-control" name="pel_seri" value="{{ $row->pel_seri }}">
        </div>


        <div class="mb-3">
            <input type="submit" value="UPDATE">
        </div>
    </form>
</div>

@endsection