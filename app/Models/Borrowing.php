<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    public function borrow()
    {
        return $this->belongsTo(Borrow::class);
    }
}
