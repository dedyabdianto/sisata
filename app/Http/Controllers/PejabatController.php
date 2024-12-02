<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pejabat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PangkatGolongan;

class PejabatController extends Controller
{
    public function index(){
        $pejabat = Pejabat::with(['jabatan', 'pangkat_golongan'])->get();
        $jabatan = Jabatan::all();
        $pagol = PangkatGolongan::all();
        return view('pages.admin.pejabat.index', with([
            'data' => $pejabat,
            'jabatan' => $jabatan,
            'pagol' => $pagol,
            'title' => 'Kelola Data Pejabat',
        ]));
    }

    public function store(Request $request)
    {
        // JANGAN LUPA VALIDATE
        $pejabat = new Pejabat();
        $pejabat->nama_pejabat = $request->nama_pejabat;
        $pejabat->jabatan_id = $request->jabatan_id;
        $pejabat->pangkat_golongan_id = $request->pangkat_golongan_id;
        $pejabat->pendidikan_terakhir = $request->pendidikan_terakhir;
       

        $riwayat_jabatan_array = [];

        foreach ($request->riwayat_jabatan as $item) {
            $riwayat_jabatan_array[] = $item;
        }

        $pejabat->riwayat_jabatan = json_encode($riwayat_jabatan_array);

        if($request->hasFile('foto')) {
            $filename = Str::random(32) . '.' . $request->file('foto')->getClientOriginalExtension();
            $file_path = $request->file('foto')->storeAs('public/gambar', $filename);
        }
      
        $pejabat->foto = isset($file_path) ? $file_path : '';
        
        if ($pejabat->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function update(Request $request, String $id)
    {

        $pejabat = Pejabat::findOrFail($id);

        $pejabat->nama_pejabat = $request->nama_pejabat;
        $pejabat->jabatan_id = $request->jabatan_id;
        $pejabat->pangkat_golongan_id = $request->pangkat_golongan_id;
        $pejabat->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pejabat->riwayat_jabatan = $request->riwayat_jabatan;

        $riwayat_jabatan_array = [];

        foreach ($request->riwayat_jabatan as $item) {
            $riwayat_jabatan_array[] = $item;
        }

        $pejabat->riwayat_jabatan = json_encode($riwayat_jabatan_array);

        if($request->hasFile('foto')) {
            $filename = Str::random(32) . '.' . $request->file('foto')->getClientOriginalExtension();
            $file_path = $request->file('foto')->storeAs('public/gambar', $filename);
        }
      
        $pejabat->foto = isset($file_path) ? $file_path : $pejabat->foto;
        
        if ($pejabat->save()) {
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(String $id) {

        $pejabat = Pejabat::findOrFail($id);

        $pejabat->delete();
        
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus data',
        ]);
    }
}
