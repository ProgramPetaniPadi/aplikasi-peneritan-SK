<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Datatendik extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "datatendiks";
    protected $fillable = [

        'nip',
        'nama',
        'password',
        'jenis_kelamin',
        'tgllahir',
        'umur',
        'id_pekerjaan',
        'nohp',
        'alamat',
    ];
    protected $hidden = [


    ];
    public function pekerjaantendiks()
    {
        return $this->belongsTo(Pekerjaantendik::class , 'id_pekerjaan', 'id');
    }
    public function datakeluargatendik()
    {
        return $this->hasMany(Datakeluargatendik::class , 'nip', 'nip');
    }
    public function pendidikantendiks()
    {
        return $this->hasMany(Datapendidikantendik::class , 'nip', 'id');
    }
}