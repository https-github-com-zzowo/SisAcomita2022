<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spouse extends Model
{
    use HasFactory;

    protected $fillable=['fullname', 'dni', 'phone', 'email', 'partner_id'];

    //Relacion de 1 a 1 inveresa
    public function partner(){
        return $this->hasOne(partner::class);
    }
}
