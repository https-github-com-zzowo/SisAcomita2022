<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //Relacion de 1 a * inversa
    public function collection(){
        return $this->belongsTo(Collection::class);
    }

    public function partner(){
        return $this->belongsTo(partner::class);
    }

    //Relacion de 1 a 1 inversa
    public function activity(){
        return $this->hasOne(activity::class);
    }

    //Relacion de 1 a 1 inversa
    public function assistence(){
        return $this->hasOne(assistence::class);
    }
}
