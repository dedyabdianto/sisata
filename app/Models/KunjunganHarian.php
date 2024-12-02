<?php

namespace App\Models;

use App\Models\Wisata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KunjunganHarian extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];

    public function wisata(){
        return $this->belongsTo(Wisata::class);
    }
}
