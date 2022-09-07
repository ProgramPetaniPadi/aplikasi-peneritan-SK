<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PembagianMatakuliah extends Authenticatable

{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "pembagianmatakuliah";
    protected $fillable = [
        'nosurat',
        'nosurattugas',
        'Jurusan',
        'program_studi',
        'semester',
        'tahun_akademik',
        'ketua_jurusan',
        'nama_ketua_jurusan',
        'nip_ketua_jurusan',
        'koord_prodi',
        'nama_koord_prodi',
        'nip_koord_prodi',
    ];
    public function datadosen()
    {
        return $this->belongsTo(DataDosen::class , 'nama', 'id');
    }
    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class , 'mata_kuliah', 'id');
    }
}