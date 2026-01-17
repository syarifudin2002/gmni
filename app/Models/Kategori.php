<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function beritas() //beritas diambil dari controller nya
    {
        return $this->hasMany(Berita::class);
    }
}
