<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spouse extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable=['fullname', 'dni', 'phone', 'partner_id'];

    //Relacion de 1 a 1 inveresa
    public function partner(){
        return $this->hasOne(partner::class);
    }
}
