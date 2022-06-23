<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dataperubahan extends Model
{
    use HasFactory, Notifiable;
    protected $table = "perubahandatakeluargadosen";
    protected $fillable = [
        'nip',
        'nama',
        'jumlah_anak_awal',
        'jumlah_anak_perubahan',
        'akta', 'kk'

    ];

} 