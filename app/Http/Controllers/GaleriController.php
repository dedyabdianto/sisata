<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //
    public function index()
    {

        $galeri = Galeri::all();

        return view('pages.admin.galeri.index', with([
            'data' => $galeri,
            'title' => 'Kelola Galeri',
        ]));
    }

    public function store(Request $request)
    {

        $request->validate([]);

        $galeri = new Galeri();
        $galeri->judul = $request->judul;
        $galeri->video = $request->video;
        $galeri->slug = Str::slug($request->judul);
        $galeri->user_id = 1;

        $file_paths = [];

        if($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $filename = Str::random(32) . '.' . $file->getClientOriginalExtension();
                $file_path = $file->storeAs('public/galeri', $filename);
                $file_paths[] = $file_path;
            }
        }
        
        $file_path_string = json_encode($file_paths);
        $galeri->foto = !empty($file_paths) ? $file_path_string : '';

        if ($galeri->save()) {return redirect()->back()->with(['success' => 'Berhasil menambahkan data']);
        } else {return redirect()->back()->with(['error' => 'Gagal menambahkan data']);}
    }

    public function update(Request $request, String $id)
    {
        // VALIDATE
        $request->validate([]);

        $galeri = Galeri::findOrFail($id);
        $galeri->judul = $request->judul;
        $galeri->video = $request->video;
        $galeri->slug = Str::slug($request->judul);
        $galeri->user_id = 1;

        $file_paths = [];

        if($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $filename = Str::random(32) . '.' . $file->getClientOriginalExtension();
                $file_path = $file->storeAs('public/galeri', $filename);
                $file_paths[] = $file_path;
            }
        }
        
        $file_path_string = json_encode($file_paths);
        $galeri->foto = !empty($file_paths) ? $file_path_string : $galeri->foto;

        if ($galeri->save()) {return redirect()->back()->with(['success' => 'Berhasil mengubah data']);
        } else {return redirect()->back()->with(['error' => 'Gagal mengubah data']);}
    }
}
