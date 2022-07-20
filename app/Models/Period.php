<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function empadronamientos(){
        return $this->hasMany(Empadronamieto::class);
    }

    //Relación 1 a 1
    public function controller(){
        return $this->hasOne(Controller::class);
    }
}
