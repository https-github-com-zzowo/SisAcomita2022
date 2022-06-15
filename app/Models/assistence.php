<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistence extends Model
{
    use HasFactory;
    //Relacion de muchos a muchos inversa
    public function activities(){
        return $this->belongsToMany(activity::class);
    }
}
