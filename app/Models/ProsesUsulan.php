<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class ProsesUsulan extends Model
{
    use HasFactory, Notifiable;
    protected $table = "prosesusulan";
    protected $fillable = [

        'nama_unit',
        'judul_usulan',
        'document',
        'buk_persuratan',
        'seketaris_direktur',
        'direktur',
        'seketaris_direktur2',
        'wadir2',
        'buk_persuratan_sk'
    ];

    public function dataunit()
    {
        return $this->belongsTo(Dataunit::class , 'nama_unit', 'id');
    }
}