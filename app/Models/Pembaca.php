<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembaca extends Model
{
    use HasFactory;

    protected $table = 'pembaca';

    protected $fillable = [
        'nama',
        'jns_klmn',
        'alamat',
        'tgl_lahir',
        'instansi',
        'no_hp'
    ];
}
