<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class activity extends Model
{
    use HasFactory;

    //Relacion de * a *
    public function fines(){
        return $this->belongsToMany(Fine::class);
    }
    //Relacion de muchos a muchos
    public function assistences(){
        return $this->belongsToMany(assistence::class);
    }
    //Relacion de 1 a 1
    public function post(){
        return $this->hasOne(post::class);
    }
}
