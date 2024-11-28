<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriWisata extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];

    public function wisata(){
        return $this->hasMany(Wisata::class);}

}
