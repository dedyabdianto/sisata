<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriWisata;

class WisataController extends Controller
{
    public function index()
    {

        $wisata = Wisata::with('kategori_wisata', 'user')->get();
        $k_wisata = KategoriWisata::all();
        $operator = User::where('role', 'operator')->get();

        return view('pages.admin.wisata.index', with([
            'data' => $wisata,
            'list' => $k_wisata,
            'operator' => $operator,
            'title' => 'Kelola Wisata',
        ]));
    }

    public function store(Request $request)
    {

        // VALIDASI
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        

        $wisata = new Wisata();
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->alamat = $request->alamat;
        $wisata->harga = $request->harga;
        $wisata->jam_mulai = $request->jam_mulai;
        $wisata->jam_selesai = $request->jam_selesai;
        $wisata->link_maps = $request->link_maps;
        $wisata->status = $request->status;
        $wisata->user_id = $request->operator;                   /// GANTI DENGAN AUTH USER
        $wisata->kategori_wisata_id = $request->kategori_wisata_id;
        $wisata->slug = Str::slug($request->nama_wisata);
        $wisata->status = 'aktif';
        
        $file_paths = [];

        if($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $filename = Str::random(32) . '.' . $file->getClientOriginalExtension();
                $file_path = $file->storeAs('public/gambar', $filename);
                $file_paths[] = $file_path;
            }
        }
        
        // $file_path_string = implode(',', $file_paths);
        $file_path_string = json_encode($file_paths);
        $wisata->foto = !empty($file_paths) ? $file_path_string : '';


        if ($wisata->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function update(Request $request, String $id)
    {

        // VALIDASI
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $wisata = Wisata::findOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->alamat = $request->alamat;
        $wisata->harga = $request->harga;
        $wisata->jam_mulai = $request->jam_mulai;
        $wisata->jam_selesai = $request->jam_selesai;
        $wisata->link_maps = $request->link_maps;
        $wisata->status = $request->status;
        $wisata->user_id = $request->operator;                   /// GANTI DENGAN AUTH USER
        $wisata->kategori_wisata_id = $request->kategori_wisata_id;
        $wisata->slug = Str::slug($request->nama_wisata);
        $wisata->status = $request->status;
        
        $file_paths = [];

        if($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $filename = Str::random(32) . '.' . $file->getClientOriginalExtension();
                $file_path = $file->storeAs('public/gambar', $filename);
                $file_paths[] = $file_path;
            }
        }
        
        // $file_path_string = implode(',', $file_paths);
        $file_path_string = json_encode($file_paths);
        $wisata->foto = !empty($file_paths) ? $file_path_string : $wisata->foto;


        if ($wisata->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(String $id){

        $wisata = Wisata::findOrFail($id);

        $wisata->delete(); 

        return redirect()->back()->with([
            'success' => 'Data Berhasil Dihapus'
        ]);
    }
}
