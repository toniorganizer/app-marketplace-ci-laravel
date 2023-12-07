<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSuplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodespl',
        'namaspl'
    ];
}
