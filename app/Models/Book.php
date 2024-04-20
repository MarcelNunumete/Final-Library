<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    protected $fillable = [
        'judul',
        'image',
        'penerbit',
        'kategori_id',
        'stock',
        'deskripsi'
    ];
}
