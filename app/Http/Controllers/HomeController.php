<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Profil;

class HomeController extends Controller
{
    public function profilinstansi (){
        return view ('pages.menu.profil-instansi');
    }

    public function profilpejabat (){
        $profil=Profil::first();
        $file = File::with(['kategori_file','user'])->get();
        
        return view ('pages.menu.profil-pejabat', with(["data"=>$profil, "file"=>$file]));
    }

    public function visimisi (){
        $profil=Profil::first();
        return view ('pages.menu.visi-misi', with(["profil"=>$profil]));
    }

    public function standarpelayanan (){
        return view ('pages.menu.standar-pelayanan');
    }

    public function sambutandinas (){
        $profil=Profil::first();
        return view ('pages.menu.sambutan-dinas', with(["profil"=>$profil]));
    }

    public function strukturorganisasi (){
        $profil=Profil::first();
        return view ('pages.menu.struktur-organisasi', with(["profil"=>$profil]));
    }

    public function empatberita (){
        return view ('pages.menu.4-berita');
    }

    public function informasiterbaru (){
        return view ('pages.menu.informasi-terbaru');
    }
    
    public function pengumuman (){
        return view ('pages.menu.pengumuman');
    }

    public function polingstatistik (){
        return view ('pages.menu.poling-statistik');
    }

    public function foto (){
        return view ('pages.menu.foto');
    }

    public function video (){
        return view ('pages.menu.video');
    }

    public function berita (){
        return view ('pages.menu.berita');
    }
}
