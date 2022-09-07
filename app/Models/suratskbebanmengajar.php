<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class suratskbebanmengajar extends Authenticatable

{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "suratskbebanmengajar";
    protected $fillable = [
        'nosurat',
        'lampiran',
        'judul_usulan',
        'document',
        'tgl',
        'semester',
        'tahun_akademik',
        'ketua_jurusan',
        'nama_ketua_jurusan',
        'nip_ketua_jurusan',
        'ketua_prodi',
        'nama_ketua_prodi',
        'nip_ketua_prodi',
    ];
}