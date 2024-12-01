<?php

namespace App\Http\Controllers;

use App\Models\PangkatGolongan;
use Illuminate\Http\Request;

class PangkatGolonganController extends Controller
{
    public function index(){
        $pagol = PangkatGolongan::all();
        return view('pages.admin.pagol.index', with([
            'data' => $pagol,
            'title' => 'Kelola Pangkat Golongan Ruang',
        ]));
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $pagol = new PangkatGolongan();
        $pagol->pangkat_golongan = $request->pangkat_golongan;
        
        if ($pagol->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function update(Request $request, String $id)
    {

        $pagol = PangkatGolongan::findOrFail($id);

        $pagol->pangkat_golongan = $request->pangkat_golongan;
        if ($pagol->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Diubah');
        }
    }

    public function destroy(String $id) {

        $pagol = PangkatGolongan::findOrFail($id);

        $pagol->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
