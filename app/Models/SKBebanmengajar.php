<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SKBebanmengajar extends Authenticatable

{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "skbebanmengajar";
    protected $fillable = [
        'nosurat',
        'semester', 'program_studi', 'tahun_akademik', 'nama_dosen', 'jurusan', 'no1', 'no2', 'no3', 'no4', 'matakuliah1', 'matakuliah2', 'matakuliah3', 'matakuliah4', 'sks_t_p1', 'sks_t_p2', 'sks_t_p3', 'sks_t_p4',
        'kelas1', 'kelas2', 'kelas3', 'kelas4',
        'semester1', 'semester2', 'semester3', 'semester4', 'jumlah_sks1', 'jumlah_sks2', 'jumlah_sks3', 'jumlah_sks4', 'tanggal', 'nama_direktur', 'nip_direktur', 'qr_direktur'
    ];
}