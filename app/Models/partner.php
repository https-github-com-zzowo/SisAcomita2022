<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;
    //Relación de 1 a *

    protected $fillable=['name', 'lastname', 'dni', 'phone', 'birthdate', 'email', 'address'];

    public function sons(){
        return $this->hasMany(son::class);
    }

    //Relacion de * a *
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Relacion de 1 * 1
    public function spouse(){
        return $this->hasOne(spouse::class);
    }
    //Relacion de 1 a *
    public function stands(){
        return $this->belongsTo(stand::class);
    }
}
