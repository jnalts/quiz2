@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Data Golongan</h3>
    
    <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>Kode</td>
            <td>Nama</td>
            <td>Created</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td>{{ $row->created_at }}</td>
            <td><a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/'.$row->gol_id.'/edit') }}">EDIT</a></td>
            <td>
                <form action="{{ url('golongan/'.$row->gol_id) }}" method="POST">
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