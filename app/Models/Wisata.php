<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
