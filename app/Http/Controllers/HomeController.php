<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function profilinstansi (){
        return view ('pages.menu.profil-instansi');
    }

    public function profilpimpinan (){
        return view ('pages.menu.profil-pimpinan');
    }

    public function visimisi (){
        return view ('pages.menu.visi-misi');
    }

    public function standarpelayanan (){
        return view ('pages.menu.standar-pelayanan');
    }

    public function sambutanrektor (){
        return view ('pages.menu.sambutan-rektor');
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
}
