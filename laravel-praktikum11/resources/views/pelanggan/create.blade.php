@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Tambah Data Pelanggan</h3>

    <form action="{{ url('/pelanggan') }}" method="POST">
        @csrf 
        <div class="mb-3">
            <label>No. Pelanggan</label>
            <input type="text" class="form-control" name="pel_no">
        </div>

        <div class="mb-3">
            <label>Id User</label>
            <input type="text" class="form-control" name="pel_id_user">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="pel_nama">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea class="form-control" name="pel_alamat"></textarea>
        </div>

        <div class="mb-3">
            <label>No. HP</label>
            <input type="text" class="form-control" name="pel_hp">
        </div>

        <div class="mb-3">
            <label>KTP</label>
            <input type="text" class="form-control" name="pel_ktp">
        </div>

        <div class="mb-3">
            <label>Seri</label>
            <input type="text" class="form-control" name="pel_seri">
        </div>

        <div class="mb-3">
            <label>Meteran</label>
            <input type="text" class="form-control" name="pel_meteran">
        </div>

        <div class="mb-3">
            <label>Aktif</label>
            <input type="text" class="form-control" name="pel_aktif">
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>

@endsection