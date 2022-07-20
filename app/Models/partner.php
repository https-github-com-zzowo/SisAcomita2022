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
      //inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function families(){
        return $this->hasMany(Family::class);
    }
    public function empadronamientos(){
        return $this->hasMany(Empadronamiento::class);
    }
    //Relacion de 1 a *
    public function assistences(){
        return $this->hasMany(assistence::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    //Relación 1 a 1
    public function controller(){
        return $this->hasOne(Controller::class);
    }
}
