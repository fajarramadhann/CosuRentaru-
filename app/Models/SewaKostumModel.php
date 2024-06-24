<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaKostumModel extends Model
{
    use HasFactory;

    protected $table = 'sewa_kostum_models';

    protected $fillable = [
        'kostum_id',
        'nama_lengkap',
        'no_hp',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'alamat_lengkap',
        'tgl_pinjam'
    ];

    public function kostum()
    {
        return $this->belongsTo(CostumModel::class, 'kostum_id');
    }
}

