<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stand extends Model
{
    use HasFactory;

    //Relacion de 1 a * inversa
    public function partner(){
        return $this->hasOne(partner::class);
    }
}
