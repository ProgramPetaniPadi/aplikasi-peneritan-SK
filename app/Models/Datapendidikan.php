<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Datapendidikan extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "pendidikandosens";
    protected $fillable = [
        'nip',
        'pendidikan_terakhir',
        'tahun_kelulusan'
    ];
    public function datadosens()
    {
        return $this->belongsTo(Datadosen::class , 'nip', 'nip');
    }
}