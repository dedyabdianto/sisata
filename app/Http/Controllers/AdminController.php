<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Models\KategoriWisata;
use App\Models\KunjunganHarian;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function dashboard()
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



        return view('pages.admin.dashboard', with([
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
        ]));
    }

    public function user()
    {
        return view('pages.admin.user');
    }

    public function useredit()
    {
        return view('pages.admin.user-edit');
    }

    public function newuser()
    {
        return view('pages.admin.new-user');
    }

    public function addpackage()
    {
        return view('pages.admin.add-package');
    }

    public function packageactive()
    {
        return view('pages.admin.package-active');
    }

    public function packagepending()
    {
        return view('pages.admin.package-pending');
    }

    public function packageexpired()
    {
        return view('pages.admin.package-expired');
    }

    public function booking()
    {
        return view('pages.admin.booking');
    }

    public function wishlist()
    {
        return view('pages.admin.wishlist');
    }

    public function comment()
    {
        return view('pages.admin.comment');
    }

    public function logout()
    {
        return view('pages.admin.logout');
    }
}
