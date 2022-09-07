<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class MataKuliah extends Authenticatable

{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "matakuliah";
    protected $fillable = [
        'id_dosen',
        'mata_kuliah',
        'semester_kelas',
        'sks_t_p',
        'jamMK',
        'kelas',
        'totalSKS',

    ];
    public function matakuliah()
    {
        return $this->hasMany(PembagianMatakuliah::class , 'mata_kuliah', 'id');
    }
    public function datadosen()
    {
        return $this->belongsTo(Datadosen::class , 'id_dosen', 'id');
    }
}