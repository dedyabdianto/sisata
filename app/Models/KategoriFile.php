<?php

namespace App\Models;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriFile extends Model
{
    use HasFactory, HasUlids;
    
    protected $guarded = [];

    public function file(){
        return $this->hasMany(File::class);}
}
