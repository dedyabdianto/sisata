<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    //
    public function index(){
        $jabatan = Jabatan::all();
        return view('pages.admin.jabatan.index', with([
            'data' => $jabatan,
            'title' => 'Kelola Jabatan',
        ]));
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $jabatan = new Jabatan();
        $jabatan->nama_jabatan = $request->nama_jabatan;
        
        if ($jabatan->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function update(Request $request, String $id)
    {

        $jabatan = Jabatan::findOrFail($id);

        $jabatan->nama_jabatan = $request->nama_jabatan;
        if ($jabatan->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Diubah');
        }
    }

    public function destroy(String $id) {

        $jabatan = Jabatan::findOrFail($id);

        $jabatan->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
