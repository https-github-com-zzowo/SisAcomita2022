<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    //Relacion de 1 a 1 inversa
    public function activity(){
        return $this->hasOne(activity::class);
    }
    //Relacion polimorfica de 1 a 1
    public function image(){
        return $this->morphOne(images::class, 'imageable');
    }
}
