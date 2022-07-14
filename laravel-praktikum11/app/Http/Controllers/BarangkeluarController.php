<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangkeluar;

class BarangkeluarController extends Controller
{

    public function index()
    {
        $rows = Barangkeluar::all();
        return view('barangkeluar.index', compact('rows'));

    }

    public function create()
    {
        return view('barangkeluar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keluar_id'=>'bail|required|unique:tb_keluar',
            'keluar_nama'=>'required'
        ],
        [
            'keluar_id.required'=>'Nomor Wajib Diisi',
            'keluar_id.unique'=>'Nomor Sudah Ada',
            'keluar_nama.required'=>'Nama Barang Wajib Diisi'
        ]);

        Barangkeluar::create([
            'keluar_id'=>$request->keluar_id,
            'keluar_nama'=>$request->keluar_nama,
            'keluar_jenis'=>$request->keluar_jenis,
            'keluar_jlh'=>$request->keluar_jlh,
            'keluar_harga'=>$request->keluar_harga,
            'keluar_pemasok'=>$request->keluar_pemasok,
            'keluar_id_user'=>$request->keluar_id_user,
            'created_at'=>$request->created_at
        ]);

        return redirect('barangkeluar');
    }

    public function edit($id)
    {
        $row=Barangkeluar::findOrFail($id);
        return view('barangkeluar.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keluar_id'=>'bail|required',
            'keluar_nama'=>'required'
        ],
        [
            'keluar_id.required'=>'Nomor Barang keluar Wajib Diisi',
            'keluar_nama.required'=>'Nama Wajib Diisi'
        ]);

        $row=Barangkeluar::findOrFail($id);
        $row->update([
            'keluar_id'=>$request->keluar_id,
            'keluar_nama'=>$request->keluar_nama,
            'keluar_alamat'=>$request->keluar_alamat,
            'keluar_hp'=>$request->keluar_hp,
            'keluar_harga'=>$request->keluar_harga,
            'keluar_pemasok'=>$request->keluar_pemasok,
            'keluar_id_user'=>$request->keluar_id_user,
            'created_at'=>$request->created_at
        ]);

        return redirect('barangkeluar');
    }

    public function destroy($id)
    {
        $row=barangkeluar::findOrFail($id);
        $row->delete();

        return redirect('barangkeluar');
    }
}
