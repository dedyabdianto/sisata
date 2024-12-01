<?php

namespace App\Models;

use App\Models\User;
use App\Models\KategoriFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];

    public function kategori_file()
    {
        return $this->belongsTo(KategoriFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
