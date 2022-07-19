<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //Relacion de * a * inversa
    public function activities(){
        return $this->belongsToMany(activity::class);
    }

    //Relacion de 1 a *
    public function payments(){
        return $this->hasMany(Payment::class);
    }

    //Relacion de 1 a 1 inveresa
    public function assistence(){
        return $this->hasOne(assistence::class);
    }
}
