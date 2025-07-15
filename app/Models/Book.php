<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'penulis', 'stok'];

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class);
    }
}
