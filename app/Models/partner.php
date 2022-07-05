<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //protected $fillable=['name', 'lastname', 'dni', 'phone', 'birthdate', 'email', 'address'];

    //Relación de 1 a *
    public function sons(){
        return $this->hasMany(son::class);
    }

    //Relacion de 1 * 1
    public function spouse(){
        return $this->hasOne(spouse::class);
    }
    //Relacion de 1 a *
    public function stands(){
        return $this->hasMany(stand::class);
    }

    //Relacion de 1 a *
    public function assistences(){
        return $this->hasMany(assistence::class);
    }
}
