<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriWisata;

class KategoriWisataController extends Controller
{
    public function index()
    {
        $k_informasi = KategoriWisata::all();

        return view('pages.admin.kategori-wisata.index', with([
            'data' => $k_informasi,
            'title' => 'Kategori Wisata',
        ]));
    }

    public function create()
    {
        return view('kategori-wisata-create');
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $k_informasi = new KategoriWisata();
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

        $k_informasi = KategoriWisata::findOrFail($id);

        $k_informasi->nama_kategori = $request->nama_kategori;
        $k_informasi->save();

        return redirect()->back()->with([
            'success' => 'Berhasil mengupdate data',
        ]);
    }

    public function destroy(String $id) {

        $k_informasi = KategoriWisata::findOrFail($id);

        $k_informasi->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
