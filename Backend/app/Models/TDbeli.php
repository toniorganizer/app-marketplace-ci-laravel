<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDbeli extends Model
{
    use HasFactory;

    protected $fillable = [
        'notransaksi',
        'kodebrg',
        'hargabeli',
        'qty',
        'diskon',
        'diskonrp',
        'totalrp',
    ];
}
