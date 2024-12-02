<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriInformasi;
use Illuminate\Support\Facades\Auth;

class InformasiController extends Controller
{
    //
    public function index(){

        $informasi = Informasi::with('kategori_informasi', 'user')->get();
        $kategori_informasi = KategoriInformasi::all();

        return view('pages.admin.informasi.index', with([
            'data' => $informasi,
            'list' => $kategori_informasi,
            'title' => 'Informasi',
        ]));
    }



    public function store(Request $request)
    {
        // VALIDATE
        $request->validate([
            'judul'=>'required|min:1',
            'isi'=>'required|min:1',
            'gambar'=>'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $informasi = new Informasi();
        $informasi->judul = $request->judul;
        $informasi->isi = $request->isi;
        $informasi->user_id = Auth::user()->id;                            /// GANTI DENGAN USER AUTH
        $informasi->kategori_informasi_id = $request->kategori_informasi_id;
        $informasi->slug = Str::slug($request->judul);
        $informasi->jml_dibaca = 0;

        if($request->hasFile('gambar')) {
            $filename = Str::random(32) . '.' . $request->file('gambar')->getClientOriginalExtension();
            $file_path = $request->file('gambar')->storeAs('public/gambar', $filename);
        }
      
        $informasi->gambar = isset($file_path) ? $file_path : '';
        // dd($request->all());
        if($informasi->save()) {
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
            'judul'=>'required|min:1',
            'isi'=>'required|min:1',
        ]);

        $informasi = Informasi::findOrFail($id);
        $informasi->judul = $request->judul;
        $informasi->isi = $request->isi;
        $informasi->user_id = Auth::user()->id;                            /// GANTI DENGAN USER AUTH
        $informasi->kategori_informasi_id = $request->kategori_informasi_id;
        $informasi->slug = Str::slug($request->judul);
        

        if($request->hasFile('gambar')) {
            $filename = Str::random(32) . '.' . $request->file('gambar')->getClientOriginalExtension();
            $file_path = $request->file('gambar')->storeAs('public/gambar', $filename);
        }
      
        $informasi->gambar = isset($file_path) ? $file_path : $informasi->gambar;
        // dd($request->all());
        if($informasi->save()) {
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

        $k_informasi = Informasi::findOrFail($id);

        $k_informasi->delete();

        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
            
