<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        // dd($k_informasi);

        return view('pages.admin.profil.index', with([
            'data' => $profil,
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

        $profil = new Profil();
        $profil->nama_kadis = $request->nama_kadis;
        $profil->visi = $request->visi;
        $profil->sambutan = $request->sambutan;
        $profil->user_id = Auth::user()->id;

        $misi_array = [];

        foreach ($request->misi as $item) {
            $misi_array[] = $item;
        }
        $profil->misi = json_encode($misi_array);


        if ($request->hasFile('foto_kadis')) {
            $filename = Str::random(32) . '.' . $request->file('foto_kadis')->getClientOriginalExtension();
            $file_path_kadis = $request->file('foto_kadis')->storeAs('public/foto', $filename);
        }
        $profil->foto_kadis = isset($file_path_kadis) ? $file_path_kadis : $profil->foto_kadis;

        if ($request->hasFile('foto_struktur')) {
            $filename = Str::random(32) . '.' . $request->file('foto_struktur')->getClientOriginalExtension();
            $file_path_struktur = $request->file('foto_struktur')->storeAs('public/foto', $filename);
        }
        $profil->foto_struktur = isset($file_path_struktur) ? $file_path_struktur : $profil->foto_struktur;

        $profil->save();
        return redirect()->back()->with([
            'success' => 'Berhasil mengupdate data',
        ]);
    }

    public function update(Request $request, string $id)
    {

        $profil = Profil::findOrFail($id);

        $profil->nama_kadis = $request->nama_kadis;
        $profil->visi = $request->visi;
        $profil->sambutan = $request->sambutan;

        $misi_array = [];

        foreach ($request->misi as $item) {
            $misi_array[] = $item;
        }
        $profil->misi = json_encode($misi_array);


        if ($request->hasFile('foto_kadis')) {
            $filename = Str::random(32) . '.' . $request->file('foto_kadis')->getClientOriginalExtension();
            $file_path_kadis = $request->file('foto_kadis')->storeAs('public/foto', $filename);
        }
        $profil->foto_kadis = isset($file_path_kadis) ? $file_path_kadis : $profil->foto_kadis;

        if ($request->hasFile('foto_struktur')) {
            $filename = Str::random(32) . '.' . $request->file('foto_struktur')->getClientOriginalExtension();
            $file_path_struktur = $request->file('foto_struktur')->storeAs('public/foto', $filename);
        }
        $profil->foto_struktur = isset($file_path_struktur) ? $file_path_struktur : $profil->foto_struktur;

        $profil->save();
        return redirect()->back()->with([
            'success' => 'Berhasil mengupdate data',
        ]);
    }

    public function destroy(string $id)
    {

        $profil = Profil::findOrFail($id);

        $profil->delete();

        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
