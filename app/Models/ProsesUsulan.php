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
        'lampiran',
        'disposisi',
        'wadir2'
    ];

    public function dataunit()
    {
        return $this->belongsTo(Dataunit::class , 'nama_unit', 'id');
    }
}