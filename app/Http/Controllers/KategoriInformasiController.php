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


    public function store(Request $request)
    {
        // VALIDATE
        $request->validate([
            'nama_kategori' => 'required|min:1',
        ]);

        $k_informasi = new KategoriInformasi();
        $k_informasi->nama_kategori = $request->nama_kategori;
        
        if($k_informasi->save()) {
            return redirect()->back()->with(
                [
                    'success' => 'Berhasil menambahkan data',
                ],
            );
        }else{
            return redirect()->back()->with(
                [
                    'error' => 'Gagal menambahkan data, pastikan anda mengisikan data yang sesuai',
                ],
            );
        }

    }

    public function update(Request $request, String $id)
    {

        // VALIDATE
        $request->validate([
            'nama_kategori' => 'required|min:1',
        ]);

        $k_informasi = KategoriInformasi::findOrFail($id);

        $k_informasi->nama_kategori = $request->nama_kategori;
        $k_informasi->save();

        if($k_informasi->save()) {
            return redirect()->back()->with(
                [
                    'success' => 'Berhasil mengubah data',
                ],
            );
        }else{
            return redirect()->back()->with(
                [
                    'error' => 'Gagal mengubah data, pastikan anda mengisikan data yang sesuai',
                ],
            );
        }
    }

    public function destroy(String $id) {

        $k_informasi = KategoriInformasi::findOrFail($id);

        $k_informasi->delete();

        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
