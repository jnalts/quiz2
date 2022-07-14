@extends('layouts.app')
@section('content')

<div class="container">
    <h1>TOKO SABIRIN</h1>
    <h3>Data Barang Keluar</h3>
    
    <a class="btn btn-primary btn-sm float-end" href="{{ url('barangkeluar/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>Kode</td>
            <td>Id Barang</td>
            <td>Nama</td>
            <td>Jenis</td>
            <td>Jumlah</td>
            <td>Pembeli</td>
            <td>Created</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->keluar_id }}</td>
            <td>{{ $row->keluar_no }}</td>
            <td>{{ $row->keluar_id }}</td>
            <td>{{ $row->keluar_nama }}</td>
            <td>{{ $row->keluar_jenis }}</td>
            <td>{{ $row->keluar_jlh }}</td>
            <td>{{ $row->keluar_pemasok }}</td>
            <td>{{ $row->created_at }}</td>
            <td><a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/'.$row->pel_id.'/edit') }}">EDIT</a></td>
            <td>
                <form action="{{ url('pelanggan/'.$row->pel_id) }}" method="POST">
                    @method('DELETE')
                    @csrf 
                    <button class="btn btn-primary btn-sm float-end">HAPUS</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection