<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangmasuk;

class BarangmasukController extends Controller
{

    public function index()
    {
        $rows = Barangmasuk::all();
        return view('barangmasuk.index', compact('rows'));

    }

    public function create()
    {
        return view('barangmasuk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'masuk_id'=>'bail|required|unique:tb_masuk',
            'masuk_nama'=>'required'
        ],
        [
            'masuk_id.required'=>'Nomor Wajib Diisi',
            'masuk_id.unique'=>'Nomor Sudah Ada',
            'masuk_nama.required'=>'Nama Barang Wajib Diisi'
        ]);

        Barangmasuk::create([
            'masuk_id'=>$request->masuk_id,
            'masuk_nama'=>$request->masuk_nama,
            'masuk_jenis'=>$request->masuk_jenis,
            'masuk_jlh'=>$request->masuk_jlh,
            'masuk_harga'=>$request->masuk_harga,
            'masuk_pemasok'=>$request->masuk_pemasok,
            'masuk_id_user'=>$request->masuk_id_user,
            'created_at'=>$request->created_at
        ]);

        return redirect('barangmasuk');
    }

    public function edit($id)
    {
        $row=Barangmasuk::findOrFail($id);
        return view('barangmasuk.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'masuk_id'=>'bail|required',
            'masuk_nama'=>'required'
        ],
        [
            'masuk_id.required'=>'Nomor Barang Masuk Wajib Diisi',
            'masuk_nama.required'=>'Nama Wajib Diisi'
        ]);

        $row=Barangmasuk::findOrFail($id);
        $row->update([
            'masuk_id'=>$request->masuk_id,
            'masuk_nama'=>$request->masuk_nama,
            'masuk_alamat'=>$request->masuk_alamat,
            'masuk_hp'=>$request->masuk_hp,
            'masuk_harga'=>$request->masuk_harga,
            'masuk_pemasok'=>$request->masuk_pemasok,
            'masuk_id_user'=>$request->masuk_id_user,
            'created_at'=>$request->created_at
        ]);

        return redirect('barangmasuk');
    }

    public function destroy($id)
    {
        $row=barangmasuk::findOrFail($id);
        $row->delete();

        return redirect('barangmasuk');
    }
}
