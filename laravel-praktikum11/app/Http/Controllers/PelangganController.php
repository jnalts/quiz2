<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{

    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));

    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pel_no'=>'bail|required|unique:tb_pelanggan',
            'pel_nama'=>'required'
        ],
        [
            'pel_no.required'=>'Nomor Pelanggan Wajib Diisi',
            'pel_no.unique'=>'Nomor Pelanggan Sudah Ada',
            'pel_nama.required'=>'Nama Wajib Diisi'
        ]);

        Pelanggan::create([
            'pel_no'=>$request->pel_no,
            'pel_nama'=>$request->pel_nama,
            'pel_alamat'=>$request->pel_alamat,
            'pel_hp'=>$request->pel_hp,
            'pel_ktp'=>$request->pel_ktp,
            'pel_seri'=>$request->pel_seri,
            'pel_meteran'=>$request->pel_meteran,
            'pel_aktif'=>$request->pel_aktif,
            'pel_id_user'=>$request->pel_id_user,
            'created_at'=>$request->created_at
        ]);

        return redirect('pelanggan');
    }

    public function edit($id)
    {
        $row=Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pel_no'=>'bail|required',
            'pel_nama'=>'required'
        ],
        [
            'pel_no.required'=>'Nomor Pelanggan Wajib Diisi',
            'pel_nama.required'=>'Nama Wajib Diisi'
        ]);

        $row=Pelanggan::findOrFail($id);
        $row->update([
            'pel_no'=>$request->pel_no,
            'pel_nama'=>$request->pel_nama,
            'pel_alamat'=>$request->pel_alamat,
            'pel_hp'=>$request->pel_hp,
            'pel_ktp'=>$request->pel_ktp,
            'pel_seri'=>$request->pel_seri,
            'pel_meteran'=>$request->pel_meteran,
            'pel_aktif'=>$request->pel_aktif,
            'pel_id_user'=>$request->pel_id_user,
            'created_at'=>$request->created_at
        ]);

        return redirect('pelanggan');
    }

    public function destroy($id)
    {
        $row=Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}
