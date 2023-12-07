<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class THutang extends Model
{
    use HasFactory;

    protected $fillable = [
        'notransaksi',
        'kodespl',
        'tglbeli',
        'totalhutang',
    ];
}
