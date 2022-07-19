<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'datetime',
        'status',
    ];

    //Relacion de * a *
    public function collections(){
        return $this->belongsToMany(Collection::class);
    }
    //Relacion de 1 a 1
    public function post(){
        return $this->hasOne(post::class);
    }

    //Relacion de 1 a *
    public function payments(){
        return $this->belongsTo(payment::class);
    }


}
