<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $k_informasi = Profil::first();
        // dd($k_informasi);
        
        return view('pages.admin.profil.index', with([
            'data' => $k_informasi,
            'title' => 'Profil',
        ]));
    }

    public function create()
    {
        return view('profil-create');
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $k_informasi = new Profil();
        $k_informasi->nama_kadis = $request->nama_kadis;
        $k_informasi->visi = $request->visi;
        $k_informasi->misi = $request->misi;
        $k_informasi->sambutan = $request->sambutan;
        $k_informasi->user_id = 1;

        

        

        $k_informasi->save();

        return redirect()->back()->with(
            [
                'success' => 'Berhasil menambahkan data',
            ],
        );
    }

    public function update(Request $request, String $id)
    {
       
        $k_informasi = Profil::findOrFail($id);

        $k_informasi->nama_kadis = $request->nama_kadis;
        $k_informasi->visi = $request->visi;
        $k_informasi->misi = $request->misi;
        $k_informasi->sambutan = $request->sambutan;
        

        if($request->hasFile('foto_kadis')) {
            $filename = Str::random(32) . '.' . $request->file('foto_kadis')->getClientOriginalExtension();
            $file_path_kadis = $request->file('foto_kadis')->storeAs('public/foto', $filename);
        }
        $k_informasi->foto_kadis = isset($file_path_kadis) ? $file_path_kadis : $k_informasi->foto_kadis;

        if($request->hasFile('foto_struktur')) {
            $filename = Str::random(32) . '.' . $request->file('foto_struktur')->getClientOriginalExtension();
            $file_path_struktur = $request->file('foto_struktur')->storeAs('public/foto', $filename);
        }
        $k_informasi->foto_struktur = isset($file_path_struktur) ? $file_path_struktur : $k_informasi->foto_struktur;

        $k_informasi->save();
        return redirect()->back()->with([
            'success' => 'Berhasil mengupdate data',
        ]);
    }

    public function destroy(String $id) {

        $k_informasi = Profil::findOrFail($id);

        $k_informasi->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
