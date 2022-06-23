<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Datakeluarga extends Model
{
    use HasFactory, Notifiable;

    protected $table = "data_keluargadosens";
    protected $fillable = [
        'nip',
        'suamiistri',
        'jumlah_anak'
    ];

    public function datadosens()
    {
        return $this->belongsTo(Datadosen::class , 'nip', 'nip');
    }
} 