<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistence extends Model
{
    use HasFactory;
    //Relacion de 1 a muchos inversa
    public function activity(){
        return $this->belongsTo(activity::class);
    }

    //Relación de 1 a * inversa
    public function partners(){
        return $this->belongsTo(partner::class);
    }

    //Relacion de 1 * 1
    public function collection(){
        return $this->hasOne(spouse::class);
    }

    //Relacion de 1 a 1
    public function payment(){
        return $this->hasOne(payment::class);
    }


}
