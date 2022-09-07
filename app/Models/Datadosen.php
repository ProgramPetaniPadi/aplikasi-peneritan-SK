<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class DataDosen extends Authenticatable

{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "datadosen";
    protected $fillable = [
        'nama',
    ];
    public function pembagianmatakuliah()
    {
        return $this->hasMany(PembagianMatakuliah::class , 'nama', 'id');
    }
    public function matakuliah()
    {
        return $this->hasMany(MataKuliah::class , 'id_dosen', 'id');
    }



}