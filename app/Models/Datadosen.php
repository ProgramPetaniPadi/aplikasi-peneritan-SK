<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Datadosen extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "datadosens";
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];
    public function pekerjaandosens()
    {
        return $this->belongsTo(Pekerjaandosen::class , 'id_pekerjaan', 'id');
    }
    public function datakeluargas()
    {
        return $this->hasMany(Datakeluarga::class , 'nip', 'nip');
    }
    public function pendidikandosens()
    {
        return $this->hasMany(Datapendidikan::class , 'nip', 'nip');
    }
}