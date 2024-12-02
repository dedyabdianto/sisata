<?php

namespace App\Models;

use App\Models\KunjunganHarian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wisata extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];

    public function kategori_wisata(){
        return $this->belongsTo(KategoriWisata::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kunjungan_harian(){
        return $this->hasMany(KunjunganHarian::class);
    }

    // Get the total number of visitors for the location, including today
    public function getTotalPengunjung()
    {
        return $this->kunjungan_harian()->sum('jumlah_kunjungan');
        // return cache()->remember("location_{$this->id}_visitor_count", 60, function () {
        //     return $this->visits()->count();
        // });
    }



}
