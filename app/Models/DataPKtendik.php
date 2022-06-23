<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DataPKtendik extends Model
{
    use HasFactory, Notifiable;
    protected $table = "perubahandatakeluargatendik";
    protected $fillable = [
        'nip',
        'nama',
        'jumlah_anak_awal',
        'jumlah_anak_perubahan',
        'akta', 'kk'

    ];
}