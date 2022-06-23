<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $rows = Golongan::all();
        return view('golongan.index', compact('rows'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gol_kode'=>'bail|required|unique:tb_golongan',
            'gol_nama'=>'required'
        ],
        [
            'gol_kode.required'=>'Kode Wajib Diisi',
            'pel_kode.unique'=>'Kode Sudah Ada',
            'gol_nama.required'=>'Nama Wajib Diisi'
        ]);

        Golongan::create([
            'gol_kode'=>$request->gol_kode,
            'gol_nama'=>$request->gol_nama,
            'created_at'=>$request->created_at
        ]);

        return redirect('golongan');
    }

    public function edit($id)
    {
        $row=Golongan::findOrFail($id);
        return view('golongan.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gol_kode'=>'bail|required',
            'gol_nama'=>'required'
        ],
        [
            'gol_kode.required'=>'Kode Wajib Diisi',
            'gol_nama.required'=>'Nama Wajib Diisi'
        ]);

        $row=golanggan::findOrFail($id);
        $row->update([
            'gol_kode'=>$request->gol_kode,
            'gol_nama'=>$request->gol_nama,
            'created_at'=>$request->created_at
        ]);

        return redirect('golongan');
    }

    public function destroy($id)
    {
        $row=Golongan::findOrFail($id);
        $row->delete();

        return redirect('golongan');
    }
}
