<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Profil;
use App\Models\Pejabat;
use App\Models\Setting;
use App\Models\Informasi;
use App\Models\KategoriFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function home (){
        $home=Setting::first();
        return view ('pages.home', with(["home"=>$home]));
    }

    public function profilinstansi (){
        $home=Setting::first();
        $informasi=Informasi::with(['kategori_informasi'])->get();
        return view ('pages.menu.profil-instansi', with(["home"=>$home, "informasi"=>$informasi]));
    }

    public function profilpenyelenggara (){
        $home=Setting::first();
        $informasi=Informasi::with(['kategori_informasi'])->get();
        return view ('pages.menu.profil-penyelenggara', with(["home"=>$home, "informasi"=>$informasi]));
    }

    public function profilpejabat (){
        $home=Setting::first();
        $profil=Pejabat::with(['jabatan', 'pangkat_golongan'])->get();
        // $file = File::with(['kategori_file','user'])->get();

        
        return view ('pages.menu.profil-pejabat', with(["data"=>$profil, "home"=>$home]));
    }

    public function visimisi (){
        $home=Setting::first();
        $profil=Profil::first();
        return view ('pages.menu.visi-misi', with(["profil"=>$profil, "home"=>$home]));
    }

    public function standarpelayanan (){

        $file=File::with(['kategori_file'])->get();
        $home=Setting::first();
        return view ('pages.menu.standar-pelayanan', with(["data"=>$file, "home"=>$home]));
    }

    public function sambutandinas (){
        $home=Setting::first();
        $profil=Profil::first();
        return view ('pages.menu.sambutan-dinas', with(["profil"=>$profil, "home"=>$home]));
    }

    public function strukturorganisasi (){
        $home=Setting::first();
        $profil=Profil::first();
        return view ('pages.menu.struktur-organisasi', with(["profil"=>$profil, "home"=>$home]));
    }

    public function empatberita (){
        $home=Setting::first();
        return view ('pages.menu.4-berita', with(["home"=>$home]));
    }

    public function informasiterbaru (){
        $home=Setting::first();
        return view ('pages.menu.informasi-terbaru', with(["home"=>$home]));
    }
    
    public function pengumuman (){
        $home=Setting::first();
        return view ('pages.menu.pengumuman', with(["home"=>$home]));
    }

    public function polingstatistik (){
        $home=Setting::first();
        return view ('pages.menu.poling-statistik', with(["home"=>$home]));
    }

    public function foto (){
        $home=Setting::first();
        return view ('pages.menu.foto', with(["home"=>$home]));
    }

    public function video (){
        $home=Setting::first();
        $profil=Pejabat::with(['jabatan', 'pangkat_golongan'])->get();
        return view ('pages.menu.video', with(["home"=>$home]));
    }

    public function download (){
        $home=Setting::first();
        $file=File::with(['kategori_file'])->get();
        return view ('pages.menu.download', with(["data"=>$file, "home"=>$home]));
    }

    public function berita (){
        $home=Setting::first();
        return view ('pages.menu.berita', with(["home"=>$home]));
    }

    public function maklumatpelayanan (){
        $home=Setting::first();
        $profil=Profil::with(['pangkat_golongan'])->get();
        $informasi=Informasi::with(['kategori_informasi'])->get();
        // dd($profil);
        return view ('pages.menu.maklumat-pelayanan', with(["profil"=>$profil, "home"=>$home, "informasi"=>$informasi]));
    }

    public function mottopelayanan (){
        $home=Setting::first();
        return view ('pages.menu.motto-pelayanan', with(["home"=>$home]));
    }

    public function alurpermohonaninformasi (){
        $home=Setting::first();
        $profil=Profil::first();
        return view ('pages.menu.alur-permohonan-informasi', with(["profil"=>$profil, "home"=>$home]));
    }

    public function hasilskm (){
        $home=Setting::first();
        $profil=Profil::first();
        return view ('pages.menu.hasil-skm', with(["profil"=>$profil, "home"=>$home]));
    }

    public function ppid (){

        $file=File::with(['kategori_file'])->get();
        $home=Setting::first();
        return view ('pages.menu.ppid', with(["data"=>$file, "home"=>$home]));
    }

    public function datasakip (){

        $file=File::with(['kategori_file'])->get();
        $home=Setting::first();
        return view ('pages.menu.data-sakip', with(["data"=>$file, "home"=>$home]));
    }

    public function lra (){

        $file=File::with(['kategori_file'])->get();
        $home=Setting::first();
        return view ('pages.menu.lra', with(["data"=>$file, "home"=>$home]));
    }

}
