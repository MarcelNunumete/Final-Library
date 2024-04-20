<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function borrowing()
    {
        return $this->hasMany(Borrowing::class);
    }

    protected $table = 'bookings';

    protected $fillable = [
        'nama_peminjam',
        'judul',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status'
    ];
}
