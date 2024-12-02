<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KategoriFile;
use Illuminate\Http\Request;

class KategoriFileController extends Controller
{
    public function index()
    {
        $k_file = KategoriFile::all();

        return view('pages.admin.kategori-file.index', with([
            'data' => $k_file,
            'title' => 'Kategori File',
        ]));
    }

    public function create()
    {
        return view('kategori-file-create');
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $k_file = new KategoriFile();
        $k_file->nama_kategori = strtoupper($request->nama_kategori);
        $k_file->save();

        return redirect()->back()->with(
            [
                'success' => 'Berhasil menambahkan data',
            ],
        );
    }

    public function update(Request $request, String $id)
    {

        $k_file = KategoriFile::findOrFail($id);

        $k_file->nama_kategori = strtoupper($request->nama_kategori);
        $k_file->save();

        return redirect()->back()->with([
            'success' => 'Berhasil mengupdate data',
        ]);
    }

    public function destroy(String $id) {

        $k_file = KategoriFile::findOrFail($id);

        $k_file->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
