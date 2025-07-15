<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'no_hp'];

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class);
    }
}
