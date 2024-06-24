<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumModel extends Model
{
    use HasFactory;

    protected $table = 'costum_models';

    protected $fillable = [
        'nama_kostum',
        'karakter',
        'anime',
        'size',
        'price_per_day',
        'quantity',
        'status',
        'image_kostum'
    ];
}
