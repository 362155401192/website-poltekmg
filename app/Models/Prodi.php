<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'slug',
        'deskripsi',
        'foto',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($prodi) {
            $prodi->slug = Str::slug($prodi->nama);
        });
    }
}
