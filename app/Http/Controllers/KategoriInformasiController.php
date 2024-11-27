<?php

namespace App\Http\Controllers;

use App\Models\KategoriInformasi;
use Illuminate\Http\Request;

class KategoriInformasiController extends Controller
{
    //

    public function index()
    {
        $k_informasi = KategoriInformasi::all();

        return view('pages.admin.kategori-informasi.index', with([
            'data' => $k_informasi,
            'title' => 'Kategori Informasi',
        ]));
    }

    public function create()
    {
        return view('kategori-informasi-create');
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $k_informasi = new KategoriInformasi();
        $k_informasi->nama_kategori = $request->nama_kategori;
        $k_informasi->save();

        return redirect()->back()->with(
            [
                'success' => 'Berhasil menambahkan data',
            ],
        );
    }

    public function update(Request $request, String $id)
    {

        $k_informasi = KategoriInformasi::findOrFail($id);

        $k_informasi->nama_kategori = $request->nama_kategori;
        $k_informasi->save();

        return redirect()->back()->with([
            'success' => 'Berhasil mengupdate data',
        ]);
    }

    public function destroy(String $id) {

        $k_informasi = KategoriInformasi::findOrFail($id);

        $k_informasi->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
