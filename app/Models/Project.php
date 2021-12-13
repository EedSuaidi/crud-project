<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $fillable = [
        'nis',
        'nama',
        'jns_kel',
        'tempat_lahir',
        'tgl_lhr',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'thn_masuk',
        'thn_keluar'
    ];
}
