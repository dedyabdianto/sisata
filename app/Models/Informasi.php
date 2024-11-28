<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'informasis';
    protected $guarded = [];

    public function kategori_informasi(){
        return $this->belongsTo(KategoriInformasi::class);}

        public function user(){
            return $this->belongsTo(User::class);
        }
}
