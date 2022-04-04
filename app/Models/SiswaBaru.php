<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaBaru extends Model
{
    protected $table = 'siswabaru';
    protected $fillable = [
        'no',
        'nama',
        'jenis_kelamin',
        'alamat',
        'agama',
        'asal_smp',
        'jurusan',
    ];

}
