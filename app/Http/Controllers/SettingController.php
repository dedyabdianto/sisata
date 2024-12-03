<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    //
    public function index()
    {

        $settings = Setting::first();


        return view('pages.admin.settings.index', with([
            'data' => $settings,
            'title' => 'Kelola Pengaturan Website',
        ]));
    }

    public function store(Request $request)
    {

        $request->validate([

        ]);

        $settings = new Setting();
        $settings->nama_web = $request->nama_web;
        $settings->email = $request->email;
        $settings->alamat = $request->alamat;
        $settings->tlp = $request->tlp;
        $settings->about = $request->about;
        $settings->tagline = $request->tagline;
        $settings->deskripsi = $request->deskripsi;
        $settings->link_fb = $request->link_fb;
        $settings->link_twt = $request->link_twt;
        $settings->link_ig = $request->link_ig;
        $settings->link_yt = $request->link_yt;
        $settings->user_id = 1;

        if ($request->hasFile('logo')) {
            $filename = Str::random(32) . '.' . $request->file('logo')->getClientOriginalExtension();
            $file_path = $request->file('logo')->storeAs('public/gambar', $filename);
        }

        $settings->logo = isset($file_path) ? $file_path : '';

        if ($settings->save()) {
            return redirect()->back()->with(['success' => 'Berhasil menambahkan data']);
        } else {
            return redirect()->back()->with(['error' => 'Gagal menambahkan data, pastikan anda mengisikan data yang sesuai']);
        }
    }

    public function update(Request $request, String $id)
    {

        $request->validate([

        ]);

        $settings = Setting::findOrFail($id);
        $settings->nama_web = $request->nama_web;
        $settings->email = $request->email;
        $settings->alamat = $request->alamat;
        $settings->tlp = $request->tlp;
        $settings->about = $request->about;
        $settings->tagline = $request->tagline;
        $settings->deskripsi = $request->deskripsi;
        $settings->link_fb = $request->link_fb;
        $settings->link_twt = $request->link_twt;
        $settings->link_ig = $request->link_ig;
        $settings->link_yt = $request->link_yt;
        $settings->user_id = 1;

        if ($request->hasFile('logo')) {
            $filename = Str::random(32) . '.' . $request->file('logo')->getClientOriginalExtension();
            $file_path = $request->file('logo')->storeAs('public/gambar', $filename);
        }

        $settings->logo = isset($file_path) ? $file_path : $settings->logo;

        if ($settings->save()) {
            return redirect()->back()->with(['success' => 'Berhasil mengubah data']);
        } else {
            return redirect()->back()->with(['error' => 'Gagal mengubah data, pastikan anda mengisikan data yang sesuai']);
        }
    }

}
