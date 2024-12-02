<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\PangkatGolongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pejabat extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function pangkat_golongan(){
        return $this->belongsTo(PangkatGolongan::class);
    }
}
