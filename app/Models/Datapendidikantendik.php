<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Datapendidikantendik extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "pendidikantendiks";
    protected $fillable = [
        'nip',
        'pendidikan_terakhir',
        'tahun_kelulusan'
    ];
    public function datatendiks()
    {
        return $this->belongsTo(Datatendik::class , 'nip', 'nip');
    }
}