<?php

namespace App\Models;

use App\Models\Profil;
use App\Models\Pejabat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PangkatGolongan extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];

    public function pejabat(){
        return $this->hasMany(Pejabat::class);
    }

    public function profil(){
        return $this->hasMany(Profil::class);
    }

}
