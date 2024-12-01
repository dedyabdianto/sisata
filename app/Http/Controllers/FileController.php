<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Str;
use App\Models\KategoriFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function index()
    {
        $file = File::with(["kategori_file"])->get();
        $k_file = KategoriFile::all();


        return view('pages.admin.file.index', with([
            'data' => $file,
            'list' => $k_file,
            'title' => 'File',
        ]));
    }

    public function create()
    {
        return view('kategori-file-create');
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $file = new File();
        $file->judul = $request->judul;
        $file->slug = Str::slug($request->judul);
        $file->tahun = $request->tahun;
        $file->kategori_file_id = $request->kategori_file_id;
        $file->user_id = 1;

        if($request->hasFile('file')) {
            $filename = Str::random(32) . '.' . $request->file('file')->getClientOriginalExtension();
            $file_path = $request->file('file')->storeAs('public/file', $filename);
        }
        $file->file = isset($file_path) ? $file_path : '';

        if ($file->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function update(Request $request, String $id)
    {

        $file = File::findOrFail($id);

        $file->judul = $request->judul;
        $file->slug = Str::slug($request->judul);
        $file->tahun = $request->tahun;
        $file->kategori_file_id = $request->kategori_file_id;
        $file->user_id = 1;
        if($request->hasFile('file')) {
            $filename = Str::random(32) . '.' . $request->file('file')->getClientOriginalExtension();
            $file_path = $request->file('file')->storeAs('public/file', $filename);
        }
        $file->file = isset($file_path) ? $file_path : $file->file;

        if ($file->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(String $id) {

        $file = File::findOrFail($id);

        $file->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
