<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffee extends Model
{
    use HasFactory;
    protected $fillable = [
        'stok',
        'harga',
        'jenis',
        'image',
        'pembukuan',
        'tanggal',
        'user_id'
    ];
}
