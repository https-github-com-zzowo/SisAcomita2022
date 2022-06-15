<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasFactory;

    //Relacion de * a * inversa
    public function activities(){
        return $this->belongsToMany(activity::class);
    }
}
