<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pekerjaantendik extends Model
{
    use HasFactory, Notifiable;
    protected $table = "pekerjaantendiks";
    protected $fillable = [

        'name'
    ];

    public function datatendiks()
    {
        return $this->hasMany(Datatendik::class , 'id_pekerjaan', 'id');
    }
}