<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Datakeluargatendik extends Model
{
    use HasFactory, Notifiable;

    protected $table = "data_keluargatendiks";
    protected $fillable = [
        'nip',
        'name',
        'suamiistri',
        'jumlah_anak'
    ];
    public function datatendiks()
    {
        return $this->belongsTo(Datatendik::class , 'nip', 'nip');
    }
}