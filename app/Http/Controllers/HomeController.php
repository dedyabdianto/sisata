<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\File;
use App\Models\User;
use App\Models\Profil;
use App\Models\Wisata;
use App\Models\Pejabat;
use App\Models\Setting;
use App\Models\Informasi;
use App\Models\KategoriFile;
use Illuminate\Http\Request;
use App\Models\KategoriWisata;
use App\Models\KunjunganHarian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function home()
    {
        $wisata = Wisata::with(['kategori_wisata', 'kunjungan_harian', 'user'])->get();
        $home = Setting::first();

        return view('pages.home', with(["home" => $home, "wisata" => $wisata]));
    }

    public function profilinstansi()
    {
        $home = Setting::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.profil-instansi', with(["home" => $home, "informasi" => $informasi]));
    }

    public function profilpenyelenggara()
    {
        $home = Setting::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.profil-penyelenggara', with(["home" => $home, "informasi" => $informasi]));
    }

    public function profilpimpinan()
    {
        $home = Setting::first();
        $profil = Pejabat::with(['jabatan', 'pangkat_golongan'])->get();
        // $file = File::with(['kategori_file','user'])->get();


        return view('pages.menu.profil-pimpinan', with(["data" => $profil, "home" => $home]));
    }

    public function visimisi()
    {
        $home = Setting::first();
        $profil = Profil::first();
        return view('pages.menu.visi-misi', with(["profil" => $profil, "home" => $home]));
    }

    public function standarpelayanan()
    {

        $file = File::with(['kategori_file'])->get();
        $home = Setting::first();
        return view('pages.menu.standar-pelayanan', with(["data" => $file, "home" => $home]));
    }

    public function perjanjiankerja()
    {

        $file = File::with(['kategori_file'])->get();
        $home = Setting::first();
        return view('pages.menu.perjanjian-kerja', with(["data" => $file, "home" => $home]));
    }


    public function sambutandinas()
    {
        $home = Setting::first();
        $profil = Profil::first();
        return view('pages.menu.sambutan-dinas', with(["profil" => $profil, "home" => $home]));
    }

    public function strukturorganisasi()
    {
        $home = Setting::first();
        $profil = Profil::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.struktur-organisasi', with(["profil" => $profil, "home" => $home, "informasi" => $informasi]));
    }

    public function agenda()
    {
        $home = Setting::first();
        $profil = Profil::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.agenda', with(["profil" => $profil, "home" => $home, "informasi" => $informasi]));
    }

    public function datakunjungan()
    {
        $home = Setting::first();
        $profil = Profil::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.data-kunjungan', with(["profil" => $profil, "home" => $home, "informasi" => $informasi]));
    }


    public function empatberita()
    {
        $home = Setting::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.4-berita', with(["home" => $home, "informasi" => $informasi]));
    }

    public function informasiterbaru(string $id)
    {
        $informasi = Informasi::findOrFail($id);
        $home = Setting::first();
        return view('pages.menu.informasi-terbaru', with(["informasi" => $informasi, "home" => $home]));
    }

    public function pengumuman()
    {
        $informasi = Informasi::with(['kategori_informasi'])->take(10)->get();
        $home = Setting::first();
        return view('pages.menu.pengumuman', with(["data" => $informasi, "home" => $home]));
    }

    public function polingstatistik()
    {
        // Get today's date
        $today = Carbon::today();

        // Fetch visitor count for each location for today
        $visitorsToday = Wisata::with([
            'kunjungan_harian' => function ($query) use ($today) {
                $query->where('tanggal_kunjungan', $today);
            }
        ])->get();

        // $dailyVisits = KunjunganHarian::selectRaw('tanggal_kunjungan, SUM(jumlah_kunjungan) as total_visitors')
        //     ->groupBy('tanggal_kunjungan')
        //     ->orderBy('tanggal_kunjungan', 'desc')
        //     ->get();

        $dailyVisits = KunjunganHarian::selectRaw('tanggal_kunjungan, SUM(jumlah_kunjungan) as total_visitors')
            ->where('tanggal_kunjungan', '>=', Carbon::now()->subDays(30))  // Limit to the last 30 days
            ->groupBy('tanggal_kunjungan')
            ->orderBy('tanggal_kunjungan', 'desc')
            ->get();

        $visits = KunjunganHarian::where('tanggal_kunjungan', '>=', Carbon::now()->subDays(7))
            ->orderBy('tanggal_kunjungan')
            ->get()
            ->groupBy('tanggal_kunjungan');

        $labels = $visits->keys()->map(function ($date) {
            return Carbon::parse($date)->format('d M');
        });

        $data = $visits->map(function ($visit) {
            return $visit->sum('jumlah_kunjungan');
        });

        // Fetch visitor data grouped by month and year
        $monthlyVisits = KunjunganHarian::selectRaw('
                MONTH(tanggal_kunjungan) as month,
                YEAR(tanggal_kunjungan) as year,
                SUM(jumlah_kunjungan) as total_visitors
            ')
            ->where('tanggal_kunjungan', '>=', Carbon::now()->subYear()) // Get data for the past year
            ->groupBy('month', 'year')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();

        // Prepare labels (months) and data (total visitors)
        $labelsBulan = $monthlyVisits->map(function ($visit) {
            return Carbon::create($visit->year, $visit->month, 1)->format('F Y');
        });

        $dataBulan = $monthlyVisits->map(function ($visit) {
            return $visit->total_visitors;
        });

        $lokasiWisata = Wisata::all();

        $kategori_wisata = KategoriWisata::withCount('wisata')->get();

        $totalVisitorsToday = KunjunganHarian::whereDate('tanggal_kunjungan', Carbon::today())
        ->sum('jumlah_kunjungan');

        $operator = User::where('role', 'operator')->get();

        $home = Setting::first();

        return view('pages.menu.poling-statistik', with([
            'dailyVisits' => $dailyVisits,
            'visitorsToday' => $visitorsToday,
            'data' => $data,
            'labels' => $labels,
            'dataBulan' => $dataBulan,
            'labelsBulan' => $labelsBulan,
            'lokasiWisata' => $lokasiWisata->count(),
            'kategori_wisata' => $kategori_wisata,
            'totalVisitorsToday' => $totalVisitorsToday,
            'operator' => $operator->count(),
            'home'=> $home,
        ]));
    
    }

    public function foto()
    {
        $home = Setting::first();
        return view('pages.menu.foto', with(["home" => $home]));
    }

    public function video()
    {
        $home = Setting::first();
        $profil = Pejabat::with(['jabatan', 'pangkat_golongan'])->get();
        return view('pages.menu.video', with(["home" => $home]));
    }

    public function download()
    {
        $home = Setting::first();
        $file = File::with(['kategori_file'])->get();
        return view('pages.menu.download', with(["data" => $file, "home" => $home]));
    }

    public function berita()
    {
        $home = Setting::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.berita', with(["home" => $home, "informasi" => $informasi]));
    }

    public function maklumatpelayanan()
    {
        $home = Setting::first();
        $profil = Profil::with(['pangkat_golongan'])->get();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        // dd($profil);
        return view('pages.menu.maklumat-pelayanan', with(["profil" => $profil, "home" => $home, "informasi" => $informasi]));
    }

    public function events()
    {

        $file = File::with(['kategori_file'])->get();
        $home = Setting::first();
        return view('pages.menu.events', with(["data" => $file, "home" => $home]));
    }

    public function mottopelayanan()
    {
        $informasi = Informasi::with(['kategori_informasi'])->get();
        $home = Setting::first();
        return view('pages.menu.motto-pelayanan', with(["home" => $home, "informasi" => $informasi]));
    }

    public function desawisata()
    {
        $informasi = Informasi::with(['kategori_informasi'])->get();
        $home = Setting::first();
        return view('pages.menu.motto-pelayanan', with(["home" => $home, "informasi" => $informasi]));
    }

    public function dayatarikwisata()
    {
        $informasi = Informasi::with(['kategori_informasi'])->get();
        $home = Setting::first();
        return view('pages.menu.daya-tarik-wisata', with(["home" => $home, "informasi" => $informasi]));
    }

    public function industripariwisata()
    {
        $informasi = Informasi::with(['kategori_informasi'])->get();
        $home = Setting::first();
        return view('pages.menu.industri-pariwisata', with(["home" => $home, "informasi" => $informasi]));
    }

    public function alurpermohonaninformasi()
    {
        $home = Setting::first();
        $profil = Profil::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.alur-permohonan-informasi', with(["profil" => $profil, "home" => $home, "informasi" => $informasi]));
    }

    public function hasilskm()
    {
        $home = Setting::first();
        $profil = Profil::first();
        $informasi = Informasi::with(['kategori_informasi'])->get();
        return view('pages.menu.hasil-skm', with(["profil" => $profil, "home" => $home, "informasi" => $informasi]));
    }

    public function ppid()
    {

        $file = File::with(['kategori_file'])->get();
        $home = Setting::first();
        return view('pages.menu.ppid', with(["data" => $file, "home" => $home]));
    }

    public function datasakip()
    {

        $file = File::with(['kategori_file'])->get();
        $home = Setting::first();
        return view('pages.menu.data-sakip', with(["data" => $file, "home" => $home]));
    }

    public function lra()
    {

        $file = File::with(['kategori_file'])->get();
        $home = Setting::first();
        return view('pages.menu.lra', with(["data" => $file, "home" => $home]));
    }

    public function menu_informasi()
    {

        $informasi = Informasi::with(['kategori_informasi'])->take(10)->get();
        $home = Setting::first();
        return view('pages.menu.menu-informasi', with(["data" => $informasi, "home" => $home]));
    }

}
