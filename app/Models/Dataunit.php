<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dataunit extends Authenticatable

{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "unitsk";
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'jabatan_fungsional'
    ];
    public function prosesusulan()
    {
        return $this->belongsTo(Prosesusulan::class , 'name', 'id');
    }

}