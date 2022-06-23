@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Data Pelanggan</h3>
    
    <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>No. Pelanggan</td>
            <td>Id User</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No. HP</td>
            <td>KTP</td>
            <td>Seri</td>
            <td>Meteran</td>
            <td>Aktif</td>
            <td>Created</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id }}</td>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_id_user }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ $row->pel_aktif }}</td>
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