<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    //Relacion de 1 a * inversa
    public function partner(){
        return $this->belongsTo(partner::class);
    }
}
