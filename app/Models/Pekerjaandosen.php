<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Pekerjaandosen extends Model
{
    use HasFactory, Notifiable;
    protected $table = "pekerjaandosens";
    protected $fillable = [
        'nama'
    ];

    public function datadosens()
    {
        return $this->hasMany(Datadosen::class , 'id_pekerjaan', 'id');
    }




}